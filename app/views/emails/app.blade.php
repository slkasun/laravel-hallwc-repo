<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<body style="font-size:12px; font-family:Arial, Serif;">
			<h3 style="color:#132b66; text-align:center;">New Agency Appointment Application: <span  style="color:#a6943f;">Hallmark WC</span></h3>

			<table style="width:100%;vertical-align:top;">

				<thead style="color:#fff; background:#132b66;">
					<tr>
						<td colspan="4"><p style="padding:4px 6px; margin:0;"><strong>General Information:</strong></p></td>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td style="vertical-align:top; width:25%;"><strong>Date of Application:</strong></td>
						<td colspan="3">{{ $application1['date_of_application'] }}</td>
					</tr>
					<tr>
						<td style="vertical-align:top;"><strong>Legal Name of Agency:</strong></td>
						<td colspan="3">{{ $application1['name_of_agency'] }}</td>

					</tr>
					<tr>
						<td style="vertical-align:top;"><strong>Mailing Address:</strong></td>
						<td colspan="3">{{ $application1['mailing_address'] }}</td>
					</tr>
					<tr>
						<td></td>
						<td><strong>City:</strong> {{ $application1['mailing_address_city'] }}</td>
						<td><strong>State:</strong> {{ $application1['mailing_address_state'] }}</td>
						<td><strong>Zip Code:</strong> {{ $application1['mailing_address_zip_code'] }}</td>
					</tr>
					<tr>
						<td style="vertical-align:top;"><strong>Physical Address: <br><em>(If different from Mailing)</em></strong></td>
						<td colspan="3">{{ $application1['physical_address'] }}</td>
					</tr>
					<tr>
						<td></td>
						<td><strong>City:</strong> {{ $application1['physical_address_city'] }}</td>
						<td><strong>State:</strong> {{ $application1['physical_address_state'] }}</td>
						<td><strong>Zip Code:</strong> {{ $application1['physical_address_zip_code'] }}</td>
					</tr>
					<tr>
						<td style="vertical-align:top;"><strong>Phone Number:</strong></td>
						<td>{{ $application1['phone'] }}</td>
						<td colspan="2" style="vertical-align:top;"><strong>Fax:</strong> {{ $application1['fax'] }}</td>
					</tr>

					<tr>
						<td colspan="4"><hr></td>
					</tr>

					<tr>
						<td colspan="4" style="vertical-align:top;padding:4px 6px;"><strong>Contacts:</strong></td>
					</tr>

					<tr>
						<td style="vertical-align:top;"><strong>Principal’s Name:</strong></td>
						<td>{{ $application1['principal_name'] }}</td>
						<td colspan="2" style="vertical-align:top;"><strong>Email:</strong> {{ $application1['principal_email'] }}</td>
					</tr>

					<tr>
						<td style="vertical-align:top;"><strong>Principal’s Social Security #:</strong></td>
						<td colspan="3">{{ $application1['principal_ss_number'] }}</td>
					</tr>

					<tr>
						<td style="vertical-align:top;"><strong>Accounting Contact:</strong></td>
						<td>{{ $application1['accounting_contact'] }}</td>
						<td colspan="2" style="vertical-align:top;"><strong>Email:</strong> {{ $application1['accounting_contact_email'] }}</td>
					</tr>


					<tr>
						<td colspan="4"><hr></td>
					</tr>

					<tr>
						<td style="vertical-align:top;"><strong>Organization Type:</strong></td>
						<td colspan="3">{{ $application1['organization_types'] }}</td>
					</tr>

					<tr>
						<td style="vertical-align:top;"><strong>Years In Business:</strong></td>
						<td>{{ $application1['years_in_business'] }}</td>
						<td colspan="2" style="vertical-align:top;"><strong>Company Website:</strong> {{ $application1['company_website'] }}</td>
					</tr>

					<tr>
						<td style="vertical-align:top;"><strong>Tax ID Number:</strong></td>
						<td colspan="3">{{ $application1['tax_id_number'] }}</td>
					</tr>


					<tr>
						<td colspan="4"><hr></td>
					</tr>

					<tr>
						<td style="vertical-align:top;"><strong>License(s) held by Applicant:</strong></td>
						<td colspan="3">{{ (isset($application1['licenses'])) ? implode(", " ,$application1['licenses']) : 'None' }}</td>
					</tr>

					<tr>
						<td style="vertical-align:top;"><strong>Are you currently appointed with a MGA?</strong></td>
						<td colspan="3">{{ $application1['mga'] }}</td>
					</tr>

					<tr>
						<td></td>
						<td colspan="3" style="vertical-align:top;"><strong>If yes, with whom?</strong> {{ $application1['mga_with'] }}</td>
					</tr>

					<tr>
						<td style="vertical-align:top;"><strong>Is Your Agency in a Cluster?</strong></td>
						<td colspan="3">{{ $application1['agency_in_cluster'] }}</td>
					</tr>

					<tr>
						<td></td>
						<td colspan="3" style="vertical-align:top;"><strong>If yes, what is the name of the cluster?</strong> {{ $application1['name_of_cluster'] }}</td>
					</tr>


					<tr>
						<td colspan="4"><hr></td>
					</tr>

					<tr>
						<td style="vertical-align:top;"><strong>How did you hear about us?</strong></td>
						<td colspan="3">{{ $application1['here_about_us'] }}</td>
					</tr>


					<tr>
						<td colspan="4"><hr></td>
					</tr>

					<tr>
						<td colspan="4" style="vertical-align:top;padding:4px 6px;"><strong>Workers’ Compensation Experience:</strong> <br>
						Please list other workers’ compensation companies your agency represents and approximate premium. (Example: TX Mutual - $300k)
						</td>
					</tr>

					<tr>
						<td colspan="4">
							<table width="80%">
								<thead>
									<tr>
										<th width="60%"><em>Company Name:</em></th>
										<th width="40%"><em>Approximate Premium:</em></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>{{ $application1['company_name1'] }}</td>
										<td style="text-align:center">{{ $application1['approximate_premium1'] }}</td>
									</tr>
									<tr>
										<td>{{ $application1['company_name2'] }}</td>
										<td style="text-align:center">{{ $application1['approximate_premium2'] }}</td>
									</tr>
									<tr>
										<td>{{ $application1['company_name3'] }}</td>
										<td style="text-align:center">{{ $application1['approximate_premium3'] }}</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>

				</tbody>
				
			</table>

			<br>

			<table style="width:100%;vertical-align:top;">

				<thead style="color:#fff; background:#132b66;">
					<tr>
						<td colspan="4"><p style="padding:4px 6px; margin:0;"><strong>Key Agency Personnel:</strong></p></td>
					</tr>
				</thead>

				<tbody>

					@if ($application2['name1'])
					<tr>
						<td style="vertical-align:top; width:25%;"><strong>Name #1:</strong></td>
						<td colspan="3">{{ $application2['name1'] }}</td>
					</tr>
					<tr>
						<td style="vertical-align:top;"><strong>Title/Job Function:</strong></td>
						<td colspan="3">{{ $application2['name1_job'] }}</td>

					</tr>
					<tr>
						<td></td>
						<td><strong>Years In Business:</strong> {{ $application2['name1_years_in_business'] }}</td>
						<td><strong>Years With Agency:</strong> {{ $application2['name1_years_with_agency'] }}</td>
						<td><strong>Email:</strong> {{ $application2['name1_email'] }}</td>
					</tr>
					<tr>
						<td style="vertical-align:top;"><strong>Professional Designations/Other Accomplishments:</strong></td>
						<td colspan="3">{{ $application2['name1_designations'] }}</td>

					</tr>
					<tr>
						<td colspan="4"><hr></td>
					</tr>
					@endif


					@if ($application2['name2'])
					<tr>
						<td style="vertical-align:top; width:25%;"><strong>Name #2:</strong></td>
						<td colspan="3">{{ $application2['name2'] }}</td>
					</tr>
					<tr>
						<td style="vertical-align:top;"><strong>Title/Job Function:</strong></td>
						<td colspan="3">{{ $application2['name2_job'] }}</td>

					</tr>
					<tr>
						<td></td>
						<td><strong>Years In Business:</strong> {{ $application2['name2_years_in_business'] }}</td>
						<td><strong>Years With Agency:</strong> {{ $application2['name2_years_with_agency'] }}</td>
						<td><strong>Email:</strong> {{ $application2['name2_email'] }}</td>
					</tr>
					<tr>
						<td style="vertical-align:top;"><strong>Professional Designations/Other Accomplishments:</strong></td>
						<td colspan="3">{{ $application2['name2_designations'] }}</td>

					</tr>
					<tr>
						<td colspan="4"><hr></td>
					</tr>
					@endif


					@if ($application2['name3'])
					<tr>
						<td style="vertical-align:top; width:25%;"><strong>Name #3:</strong></td>
						<td colspan="3">{{ $application2['name3'] }}</td>
					</tr>
					<tr>
						<td style="vertical-align:top;"><strong>Title/Job Function:</strong></td>
						<td colspan="3">{{ $application2['name3_job'] }}</td>

					</tr>
					<tr>
						<td></td>
						<td><strong>Years In Business:</strong> {{ $application2['name3_years_in_business'] }}</td>
						<td><strong>Years With Agency:</strong> {{ $application2['name3_years_with_agency'] }}</td>
						<td><strong>Email:</strong> {{ $application2['name3_email'] }}</td>
					</tr>
					<tr>
						<td style="vertical-align:top;"><strong>Professional Designations/Other Accomplishments:</strong></td>
						<td colspan="3">{{ $application2['name3_designations'] }}</td>

					</tr>
					<tr>
						<td colspan="4"><hr></td>
					</tr>
					@endif

					@if ($application2['name4'])
					<tr>
						<td style="vertical-align:top; width:25%;"><strong>Name #4:</strong></td>
						<td colspan="3">{{ $application2['name4'] }}</td>
					</tr>
					<tr>
						<td style="vertical-align:top;"><strong>Title/Job Function:</strong></td>
						<td colspan="3">{{ $application2['name4_job'] }}</td>

					</tr>
					<tr>
						<td></td>
						<td><strong>Years In Business:</strong> {{ $application2['name4_years_in_business'] }}</td>
						<td><strong>Years With Agency:</strong> {{ $application2['name4_years_with_agency'] }}</td>
						<td><strong>Email:</strong> {{ $application2['name4_email'] }}</td>
					</tr>
					<tr>
						<td style="vertical-align:top;"><strong>Professional Designations/Other Accomplishments:</strong></td>
						<td colspan="3">{{ $application2['name4_designations'] }}</td>

					</tr>
					<tr>
						<td colspan="4"><hr></td>
					</tr>
					@endif

					<tr>
						<td colspan="4" style="vertical-align:top;"><strong>Has anyone in the agency been the subject of an investigation and/or disciplinary action by any insurance authority?</strong> {{ $application2['disciplinary_action'] }}</td>
					</tr>

					<tr>
						<td style="vertical-align:top;"><strong>If yes, please explain:</strong></td>
						<td colspan="3">{{ $application2['disciplinary_explain'] }}</td>

					</tr>

				</tbody>
				
			</table>



			<br>

			<table style="width:100%;vertical-align:top;">

				<thead style="color:#fff; background:#132b66;">
					<tr>
						<td colspan="3"><p style="padding:4px 6px; margin:0;"><strong>Annual Volumn Projections:</strong></p></td>
					</tr>
				</thead>

				<tbody>

					<tr>						
						<td width="25%"><strong>Current Year:</strong> {{ $application3['current_year'] }}</td>
						<td width="25%"><strong>Premium $:</strong> {{ $application3['current_year_premium'] }}</td>
						<td><strong>Policies #:</strong> {{ $application3['current_year_policies'] }}</td>
					</tr>

					<tr>						
						<td><strong>Next Year:</strong> {{ $application3['next_year'] }}</td>
						<td><strong>Premium $:</strong> {{ $application3['next_year_premium'] }}</td>
						<td><strong>Policies #:</strong> {{ $application3['next_year_policies'] }}</td>
					</tr>

					<tr>
						<td colspan="3"><hr></td>
					</tr>

					<tr>
						<td style="vertical-align:top;"><strong>How do you plan to grow your book with Hallmark?</strong></td>
						<td colspan="2">{{ $application3['grow_your_book'] }}</td>
					</tr>

					<tr>
						<td style="vertical-align:top;"><strong>Business Plan to Meet Objectives:</strong></td>
						<td colspan="2">{{ $application3['business_plan'] }}</td>
					</tr>

					<tr>
						<td colspan="3"><hr></td>
					</tr>

					<tr>
						<td colspan="3" style="vertical-align:top;"><strong>Would your agency benefit from an onsite visit from a Field Marketing Representative?</strong> {{ $application3['benefit_from_field_marketing'] }}</td>
					</tr>

					<tr>
						<td style="vertical-align:top;"><strong>If yes, please explain:</strong></td>
						<td colspan="2">{{ $application3['benefit_from_field_marketing_explain'] }}</td>
					</tr>

					<tr>
						<td colspan="3"><hr></td>
					</tr>

					<tr>
						<td colspan="3" style="vertical-align:top;padding:4px 6px;color:#c60f13"><strong>Agents Acknowledgement:</strong></td>
					</tr>

					<tr>
						<td colspan="3" style="vertical-align:top;">
						I hereby affirm that the information I have provided is true and correct to the best of my knowledge.</td>
					</tr>

					<tr>
						<td style="vertical-align:top;"><strong>Electronic Signature:</strong></td>
						<td colspan="2">{{ $application3['electronic_signature'] }}</td>
					</tr>

					<tr>
						<td style="vertical-align:top;"><strong>Date:</strong></td>
						<td colspan="2">{{ $application3['electronic_signature_date'] }}</td>
					</tr>


				</tbody>
				
			</table>


		</body>
	</body>
</html>