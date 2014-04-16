<?php

use App\Models\Slider;
use App\Models\Page;
use App\Models\EmailCategory;
use App\Models\FormCategory;
use App\Models\Link;
use App\Services\Validators\ContactFormValidator;

class HomeController extends BaseController {

	public function __construct()
	{
		$this->beforeFilter('csrf', array('on' => 'post'));
	}

	public function getIndex()
	{
		return View::make('site.home.index')
			->with('page', Page::find(1))
			->with('sliders', Slider::orderBy('order','asc')->get());
	}

	public function getForms()
	{
		return View::make('site.forms.index')
			->with('page', Page::find(3))
			->with('forms', FormCategory::find(1))
			->with('employer_forms', FormCategory::with('forms')->find(2))
			->with('employee_forms', FormCategory::with('forms')->find(3))
			->with('montana_forms', FormCategory::with('forms')->find(4));
	}

	public function getLossControlServices()
	{
		return View::make('site.loss_control_services.index')
			->with('page', Page::find(4));
	}

	public function getLossRunRequest()
	{
		return View::make('site.loss_run_request.index')
			->with('page', Page::find(5))
			->with('loss_run_request_forms', FormCategory::with('forms')->find(5));
	}

	public function getClassCodes()
	{
		return View::make('site.class_codes.index')
			->with('page', Page::find(6))
			->with('class_code_forms', FormCategory::with('forms')->find(6));
	}

	public function getInformativeLinks()
	{
		return View::make('site.informative_links.index')
			->with('page', Page::find(7))
			->with('links', Link::orderBy('order','asc')->get());
	}

	public function getPaymentOptions()
	{
		return View::make('site.payment_options.index')
			->with('page', Page::find(8))
			->with('payment_forms', FormCategory::with('forms')->find(7))
			->with('payroll_forms', FormCategory::with('forms')->find(8));
	}

	public function getHealthcareNetwork()
	{
		return View::make('site.healthcare_network.index')
			->with('page', Page::find(9))
			->with('network_forms', FormCategory::with('forms')->find(9));
	}

	public function getReportClaim()
	{
		return View::make('site.report_claim.index')
			->with('page', Page::find(11))
			->with('texas_claims_forms', FormCategory::with('forms')->find(11))
			->with('montana_claims_forms', FormCategory::with('forms')->find(12));
	}

	public function getInjuredWorkerServices()
	{
		return View::make('site.injured_worker_services.index')
			->with('page', Page::find(10))
			->with('injured_worker_forms', FormCategory::with('forms')->find(10));
	}

	public function getOurTeam()
	{
		return View::make('site.our_team.index')
			->with('page', Page::find(12));
	}

	public function getPressRoom()
	{
		return View::make('site.press_room.index')
			->with('page', Page::find(13));
	}

	public function getRequestInformation()
	{
		return View::make('site.request_information.index')
			->with('page', Page::find(14));
	}

	public function getBecomeAppointed()
	{
		Session::push('application', array());
		$application = Session::get('application');

		return View::make('site.become_appointed.application1')
			->with('page', Page::find(2))
			->with('application', $application[0]);
	}

	public function getBecomeAppointed2()
	{
		$application = Session::get('application2');

		return View::make('site.become_appointed.application2')
			->with('page', Page::find(2))
			->with('application', $application[0]);
	}

	public function getBecomeAppointed3()
	{
		$application = Session::get('application3');

		return View::make('site.become_appointed.application3')
			->with('page', Page::find(2))
			->with('application', $application[0]);
	}

	public function getDownload($id){
		return Response::download('uploads/site/form/'. $id);
	}




	/* POST */
	public function postBecomeAppointed(){

		if (Session::has('application'))
		{
		    Session::forget('application');
		}

		Session::push('application', Input::all());

		return Redirect::to('become-appointed2');
	}

	public function postBecomeAppointed2(){

		if (Session::has('application2'))
		{
		    Session::forget('application2');
		}

		Session::push('application2', Input::all());

		return Redirect::to('become-appointed3');
	}

	public function postBecomeAppointed3(){

			if (Session::has('application3'))
			{
			    Session::forget('application3');
			}

			Session::push('application3', Input::all());

			// for mail & pdf
			$application1 = Session::get('application');
			$application2 = Session::get('application2');
			$application3 = Session::get('application3');

			if (Input::has('btn_submit'))
			{
				$data['application1'] = $application1[0];
				$data['application2'] = $application2[0];
				$data['application3'] = $application3[0];

				$email_category = EmailCategory::with('emails')->find(1);
				foreach ($email_category->emails as $email_row) {
					$emails[] = $email_row->email;
				}

				Mail::send('emails.app', $data, function($message) use ($emails)
				{
				    $message->to($emails)->subject('New Agency Appointment Application: Hallmark WC');

				});
							
				Session::forget('application');
				Session::forget('application2');
				Session::forget('application3');
				
				Session::flash('message', 'Your application has been submitted successfully.');

				return Redirect::to('become-appointed');

			}
			else
			{
				/* Print PDF */

				$html = View::make('emails.app')
					->with('application1', $application1[0])
					->with('application2', $application2[0])
					->with('application3', $application3[0]);

		    	return PDF::load($html, 'A4', 'portrait')->download('new_agency_appointment_application');
			}
	}

	public function postRequestInformation()
	{
		$validation = new ContactFormValidator;

		if ($validation->passes())
		{
			$data = Input::all();

			$needs = Input::get('needs');

			if (in_array('New Appointment', $needs)){
				$email_category = EmailCategory::with('emails')->find(2);
				foreach ($email_category->emails as $email_row) {
					$emails[] = $email_row->email;
				}
			}

			if (in_array('Existing Policy Service', $needs)){
				$email_category = EmailCategory::with('emails')->find(3);
				foreach ($email_category->emails as $email_row) {
					$emails[] = $email_row->email;
				}				
			}

			if (in_array('Claims Service', $needs)){
				$email_category = EmailCategory::with('emails')->find(4);
				foreach ($email_category->emails as $email_row) {
					$emails[] = $email_row->email;
				}
			}

			if (in_array('Media Request', $needs)){
				$email_category = EmailCategory::with('emails')->find(5);
				foreach ($email_category->emails as $email_row) {
					$emails[] = $email_row->email;
				}
			}

			if (in_array('Hallmark Financial Services', $needs)){
				$email_category = EmailCategory::with('emails')->find(6);
				foreach ($email_category->emails as $email_row) {
					$emails[] = $email_row->email;
				}
			}

			if (in_array('Other', $needs)){
				$email_category = EmailCategory::with('emails')->find(7);
				foreach ($email_category->emails as $email_row) {
					$emails[] = $email_row->email;
				}
			}

			Mail::send('emails.request_info', $data, function($message) use ($emails)
			{
			    $message->to($emails)->subject('Request More Information');

			});
			

			Session::flash('message', 'Your message has been sent.');

			return Redirect::back();
		}

		return Redirect::back()->withInput()->withErrors($validation->errors);
	}

	/*
	public function getApp1(){
		$application1 = Session::get('application');
		$application2 = Session::get('application2');
		$application3 = Session::get('application3');

		return View::make('emails.app')
			->with('application1', $application1[0])
			->with('application2', $application2[0])
			->with('application3', $application3[0]);
	}
	*/

}