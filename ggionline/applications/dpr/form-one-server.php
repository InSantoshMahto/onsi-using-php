<?php
    if (isset($submit) && (!empty($submit)) && $submit == "dprOne") {
    	/* formating data */
    	//$id = formatDprone($_SWSSION['id']);
    	$id = $_SESSION['session_id'];
    	$year = date("Y");
    	$dateOfDpr = date("d-m-Y");
    	$submissionDate = date("d-m-Y");
    	$course = 'b-tech';
        //echo "<br />".$dprOneDate."<br />".$dprOneZoneName."<br />".$dprOneSubmittedBy."<br />".$dprOneSubmissionDate."<br />";

        if (isset($dprOne1) && (!empty($dprOne1)) && $dprOne1 == 'on') {
        	if (isset($recOfActivity1) && (!empty($recOfActivity1))) {

        		/* set the empty value null And Formating the input data-1 */

        		/*  Record of Activity-1  */
        		$recOfActivity1 = formatDprone($recOfActivity1);
        		$recOfActivity1 = "'$recOfActivity1'";

        		/*  Colleges/Inst./ Tuitions-1  */
        		if(empty($insName1))
        			$insName1 = 'null';
        		else {
        			$insName1 = formatDprone($insName1);
        			$insName1 = "'$insName1'";
        		}

        		/*   Promoters (Teachers/Consultants)-1 */
        		if(empty($proName1))
        			$proName1 = 'null';
        		else {
        			$proName1 = formatDprone($proName1);
        			$proName1 = "'$proName1'";
        		}

        		/*  Parents (Ex/Present)-1  */
        		if(empty($parName1))
        			$parName1 = 'null';
        		else {
        			$parName1 = formatDprone($parName1);
        			$parName1 = "'$parName1'";
        		}

        		/* Prospective Students-1   */
        		if(empty($proStuName1))
        			$proStuName1 = 'null';
        		else {
        			$proStuName1 = formatDprone($proStuName1);
        			$proStuName1 = "'$proStuName1'";
        		}

        		/*  For Presentations-1  */
        		if(empty($dprOnePresentations1))
        			$dprOnePresentations1 = 'null';
        		else {
        			$dprOnePresentations1 = formatDprone($dprOneNoOfPromoters1);
        			$dprOnePresentations1 = "'$dprOnePresentations1'";
        		}

        		/*  No. of Promoters met and their details-1  */
        		if(empty($dprOneNoOfPromoters1))
        			$dprOneNoOfPromoters1 = 'null';
        		else {
        			$dprOneNoOfPromoters1 = formatDprone($dprOneNoOfPromoters1);
        			$dprOneNoOfPromoters1 = "'$dprOneNoOfPromoters1'";
        		}

        		/*  Parents met and their feedback-1  */
        		if(empty($dprOneParFeedback1))
        			$dprOneParFeedback1 = 'null';
        		else {
        			$dprOneParFeedback1 = formatDprone($dprOneParFeedback1);
        			$dprOneParFeedback1 = "'$dprOneParFeedback1'";
        		}

        		/*  Presentation made and the instituion detail-1  */
        		if(empty($dprOnePreAndInsDetails1))
        			$dprOnePreAndInsDetails1 = 'null';
        		else {
        			$dprOnePreAndInsDetails1 = formatDprone($dprOnePreAndInsDetails1);
        			$dprOnePreAndInsDetails1 = "'$dprOnePreAndInsDetails1'";
        		}

        		/* sql insert query-1   */
        		$query1 = "INSERT INTO dpr_one (id, recOfActivity, institutes, promoters, parents, proStudents, presentations, noOfPromoters, parFeedback, preAndInsDetails, year, dateOfDpr, submissionDate, course) VALUES($id, $recOfActivity1, $insName1, $proName1, $parName1, $proStuName1, $dprOnePresentations1, $dprOneNoOfPromoters1, $dprOneParFeedback1, $dprOnePreAndInsDetails1, $year, '$dateOfDpr', '$submissionDate', '$course');";
        		//echo $query1;
        		if (mysqli_query($conn_ggi,$query1)) {
        			$chk = '1';
        		}
        	}
        }

        if (isset($dprOne2) && (!empty($dprOne2)) && $dprOne2 == 'on') {
        	if (isset($recOfActivity2) && (!empty($recOfActivity2))) {

        		/* set the empty value null And Formating the input data-2 */

        		/*  Record of Activity-2  */
        		$recOfActivity2 = formatDprone($recOfActivity2);
        		$recOfActivity2 = "'$recOfActivity2'";

        		/*  Colleges/Inst./ Tuitions-2  */
        		if(empty($insName2))
        			$insName2 = 'null';
        		else {
        			$insName2 = formatDprone($insName2);
        			$insName2 = "'$insName2'";
        		}

        		/*   Promoters (Teachers/Consultants)-2 */
        		if(empty($proName2))
        			$proName2 = 'null';
        		else {
        			$proName2 = formatDprone($proName2);
        			$proName2 = "'$proName2'";
        		}

        		/*  Parents (Ex/Present)-2  */
        		if(empty($parName2))
        			$parName2 = 'null';
        		else {
        			$parName2 = formatDprone($parName2);
        			$parName2 = "'$parName2'";
        		}

        		/* Prospective Students-2   */
        		if(empty($proStuName2))
        			$proStuName2 = 'null';
        		else {
        			$proStuName2 = formatDprone($proStuName2);
        			$proStuName2 = "'$proStuName2'";
        		}

        		/*  For Presentations-2  */
        		if(empty($dprOnePresentations2))
        			$dprOnePresentations2 = 'null';
        		else {
        			$dprOnePresentations2 = formatDprone($dprOneNoOfPromoters2);
        			$dprOnePresentations2 = "'$dprOnePresentations2'";
        		}

        		/*  No. of Promoters met and their details-2  */
        		if(empty($dprOneNoOfPromoters2))
        			$dprOneNoOfPromoters2 = 'null';
        		else {
        			$dprOneNoOfPromoter2 = formatDprone($dprOneNoOfPromoters2);
        			$dprOneNoOfPromoters2 = "'$dprOneNoOfPromoters2'";
        		}

        		/*  Parents met and their feedback-2  */
        		if(empty($dprOneParFeedback2))
        			$dprOneParFeedback2 = 'null';
        		else {
        			$dprOneParFeedback2 = formatDprone($dprOneParFeedback2);
        			$dprOneParFeedback2 = "'$dprOneParFeedback2'";
        		}

        		/*  Presentation made and the instituion detail-2  */
        		if(empty($dprOnePreAndInsDetails2))
        			$dprOnePreAndInsDetails2 = 'null';
        		else {
        			$dprOnePreAndInsDetails2 = formatDprone($dprOnePreAndInsDetails2);
        			$dprOnePreAndInsDetails2 = "'$dprOnePreAndInsDetails2'";
        		}

        		/* sql insert query-2   */
        		$query2 = "INSERT INTO dpr_one (id, recOfActivity, institutes, promoters, parents, proStudents, presentations, noOfPromoters, parFeedback, preAndInsDetails, year, dateOfDpr, submissionDate, course) VALUES($id, $recOfActivity2, $insName2, $proName2, $parName2, $proStuName2, $dprOnePresentations2, $dprOneNoOfPromoters2, $dprOneParFeedback2, $dprOnePreAndInsDetails2, $year, '$dateOfDpr', '$submissionDate', '$course');";
        		//echo $query2;
        		if (mysqli_query($conn_ggi,$query2)) {
        			$chk .= ',2';
        		}
        	}
        }

        if (isset($dprOne3) && (!empty($dprOne3)) && $dprOne3 == 'on') {
        	if (isset($recOfActivity3) && (!empty($recOfActivity3))) {

        		/* set the empty value null And Formating the input data-3 */

        		/*  Record of Activity-3  */
        		$recOfActivity3 = formatDprone($recOfActivity3);
        		$recOfActivity3 = "'$recOfActivity3'";

        		/*  Colleges/Inst./ Tuitions-3  */
        		if(empty($insName3))
        			$insName3 = 'null';
        		else {
        			$insName3 = formatDprone($insName3);
        			$insName3 = "'$insName3'";
        		}

        		/*   Promoters (Teachers/Consultants)-3 */
        		if(empty($proName3))
        			$proName3 = 'null';
        		else {
        			$proName3 = formatDprone($proName3);
        			$proName3 = "'$proName3'";
        		}

        		/*  Parents (Ex/Present)-3  */
        		if(empty($parName3))
        			$parName3 = 'null';
        		else {
        			$parName3 = formatDprone($parName3);
        			$parName3 = "'$parName3'";
        		}

        		/* Prospective Students-3   */
        		if(empty($proStuName3))
        			$proStuName3 = 'null';
        		else {
        			$proStuName3 = formatDprone($proStuName3);
        			$proStuName3 = "'$proStuName3'";
        		}

        		/*  For Presentations-3  */
        		if(empty($dprOnePresentations3))
        			$dprOnePresentations3 = 'null';
        		else {
        			$dprOnePresentations3 = formatDprone($dprOneNoOfPromoters3);
        			$dprOnePresentations3 = "'$dprOnePresentations3'";
        		}

        		/*  No. of Promoters met and their details-3  */
        		if(empty($dprOneNoOfPromoters3))
        			$dprOneNoOfPromoters3 = 'null';
        		else {
        			$dprOneNoOfPromoters3 = formatDprone($dprOneNoOfPromoters3);
        			$dprOneNoOfPromoters3 = "'$dprOneNoOfPromoters3'";
        		}

        		/*  Parents met and their feedback-3  */
        		if(empty($dprOneParFeedback3))
        			$dprOneParFeedback3 = 'null';
        		else {
        			$dprOneParFeedback3 = formatDprone($dprOneParFeedback3);
        			$dprOneParFeedback3 = "'$dprOneParFeedback3'";
        		}

        		/*  Presentation made and the instituion detail-3  */
        		if(empty($dprOnePreAndInsDetails3))
        			$dprOnePreAndInsDetails3 = 'null';
        		else {
        			$dprOnePreAndInsDetails3 = formatDprone($dprOnePreAndInsDetails3);
        			$dprOnePreAndInsDetails3 = "'$dprOnePreAndInsDetails3'";
        		}

        		/* sql insert query-3   */
        		$query3 = "INSERT INTO dpr_one (id, recOfActivity, institutes, promoters, parents, proStudents, presentations, noOfPromoters, parFeedback, preAndInsDetails, year, dateOfDpr, submissionDate, course) VALUES($id, $recOfActivity3, $insName3, $proName3, $parName3, $proStuName3, $dprOnePresentations3, $dprOneNoOfPromoters3, $dprOneParFeedback3, $dprOnePreAndInsDetails3, $year, '$dateOfDpr', '$submissionDate', '$course');";
        		//echo $query3;
        		if (mysqli_query($conn_ggi,$query3)) {
        			$chk .= ',3';
        		}
        	}
        }

        if (isset($dprOne4) && (!empty($dprOne4)) && $dprOne4 == 'on') {
        	if (isset($recOfActivity4) && (!empty($recOfActivity4))) {

        		/* set the empty value null And Formating the input data-4 */

        		/*  Record of Activity-4  */
        		$recOfActivity4 = formatDprone($recOfActivity4);
        		$recOfActivity4 = "'$recOfActivity4'";

        		/*  Colleges/Inst./ Tuitions-4  */
        		if(empty($insName4))
        			$insName4 = 'null';
        		else {
        			$insName4 = formatDprone($insName4);
        			$insName4 = "'$insName4'";
        		}

        		/*   Promoters (Teachers/Consultants)-4 */
        		if(empty($proName4))
        			$proName4 = 'null';
        		else {
        			$proName4 = formatDprone($proName4);
        			$proName4 = "'$proName4'";
        		}

        		/*  Parents (Ex/Present)-4  */
        		if(empty($parName4))
        			$parName4 = 'null';
        		else {
        			$parName4 = formatDprone($parName4);
        			$parName4 = "'$parName4'";
        		}

        		/* Prospective Students-4   */
        		if(empty($proStuName4))
        			$proStuName4 = 'null';
        		else {
        			$proStuName4 = formatDprone($proStuName4);
        			$proStuName4 = "'$proStuName4'";
        		}

        		/*  For Presentations-4  */
        		if(empty($dprOnePresentations4))
        			$dprOnePresentations4 = 'null';
        		else {
        			$dprOnePresentations4 = formatDprone($dprOneNoOfPromoters4);
        			$dprOnePresentations4 = "'$dprOnePresentations4'";
        		}

        		/*  No. of Promoters met and their details-4  */
        		if(empty($dprOneNoOfPromoters4))
        			$dprOneNoOfPromoters4 = 'null';
        		else {
        			$dprOneNoOfPromoters4 = formatDprone($dprOneNoOfPromoters4);
        			$dprOneNoOfPromoters4 = "'$dprOneNoOfPromoters4'";
        		}

        		/*  Parents met and their feedback-4  */
        		if(empty($dprOneParFeedback4))
        			$dprOneParFeedback4 = 'null';
        		else {
        			$dprOneParFeedback4 = formatDprone($dprOneParFeedback4);
        			$dprOneParFeedback4 = "'$dprOneParFeedback4'";
        		}

        		/*  Presentation made and the instituion detail-4  */
        		if(empty($dprOnePreAndInsDetails4))
        			$dprOnePreAndInsDetails4 = 'null';
        		else {
        			$dprOnePreAndInsDetails4 = formatDprone($dprOnePreAndInsDetails4);
        			$dprOnePreAndInsDetails4 = "'$dprOnePreAndInsDetails4'";
        		}

        		/* sql insert query-4   */
        		$query4 = "INSERT INTO dpr_one (id, recOfActivity, institutes, promoters, parents, proStudents, presentations, noOfPromoters, parFeedback, preAndInsDetails, year, dateOfDpr, submissionDate, course) VALUES($id, $recOfActivity4, $insName4, $proName4, $parName4, $proStuName4, $dprOnePresentations4, $dprOneNoOfPromoters4, $dprOneParFeedback4, $dprOnePreAndInsDetails4, $year, '$dateOfDpr', '$submissionDate', '$course');";
        		//echo $query4;
        		if (mysqli_query($conn_ggi,$query4)) {
        			$chk .= ',4';
        		}
        	}
        }

        if (isset($dprOne5) && (!empty($dprOne5)) && $dprOne5 == 'on') {
        	if (isset($recOfActivity5) && (!empty($recOfActivity5))) {

        		/* set the empty value null And Formating the input data-5 */

        		/*  Record of Activity-5  */
        		$recOfActivity5 = formatDprone($recOfActivity5);
        		$recOfActivity5 = "'$recOfActivity5'";

        		/*  Colleges/Inst./ Tuitions-5  */
        		if(empty($insName5))
        			$insName5 = 'null';
        		else {
        			$insName5 = formatDprone($insName5);
        			$insName5 = "'$insName5'";
        		}

        		/*   Promoters (Teachers/Consultants)-5 */
        		if(empty($proName5))
        			$proName5 = 'null';
        		else {
        			$proName5 = formatDprone($proName5);
        			$proName5 = "'$proName5'";
        		}

        		/*  Parents (Ex/Present)-5  */
        		if(empty($parName5))
        			$parName5 = 'null';
        		else {
        			$parName5 = formatDprone($parName5);
        			$parName5 = "'$parName5'";
        		}

        		/* Prospective Students-5   */
        		if(empty($proStuName5))
        			$proStuName5 = 'null';
        		else {
        			$proStuName5 = formatDprone($proStuName5);
        			$proStuName5 = "'$proStuName5'";
        		}

        		/*  For Presentations-5  */
        		if(empty($dprOnePresentations5))
        			$dprOnePresentations5 = 'null';
        		else {
        			$dprOnePresentations5 = formatDprone($dprOneNoOfPromoters5);
        			$dprOnePresentations5 = "'$dprOnePresentations5'";
        		}

        		/*  No. of Promoters met and their details-5  */
        		if(empty($dprOneNoOfPromoters5))
        			$dprOneNoOfPromoters5 = 'null';
        		else {
        			$dprOneNoOfPromoters5 = formatDprone($dprOneNoOfPromoters5);
        			$dprOneNoOfPromoters5 = "'$dprOneNoOfPromoters5'";
        		}

        		/*  Parents met and their feedback-5  */
        		if(empty($dprOneParFeedback5))
        			$dprOneParFeedback5 = 'null';
        		else {
        			$dprOneParFeedback5 = formatDprone($dprOneParFeedback5);
        			$dprOneParFeedback5 = "'$dprOneParFeedback5'";
        		}

        		/*  Presentation made and the instituion detail-5  */
        		if(empty($dprOnePreAndInsDetails5))
        			$dprOnePreAndInsDetails5 = 'null';
        		else {
        			$dprOnePreAndInsDetails5 = formatDprone($dprOnePreAndInsDetails5);
        			$dprOnePreAndInsDetails5 = "'$dprOnePreAndInsDetails5'";
        		}

        		/* sql insert query-5   */
        		$query5 = "INSERT INTO dpr_one (id, recOfActivity, institutes, promoters, parents, proStudents, presentations, noOfPromoters, parFeedback, preAndInsDetails, year, dateOfDpr, submissionDate, course) VALUES($id, $recOfActivity5, $insName5, $proName5, $parName5, $proStuName5, $dprOnePresentations5, $dprOneNoOfPromoters5, $dprOneParFeedback5, $dprOnePreAndInsDetails5, $year, '$dateOfDpr', '$submissionDate', '$course');";
        		//echo $query5;
        		if (mysqli_query($conn_ggi,$query5)) {
        			$chk .= ',5';
        		}
        	}
        }

        if (isset($dprOne6) && (!empty($dprOne6)) && $dprOne6 == 'on') {
        	if (isset($recOfActivity6) && (!empty($recOfActivity6))) {

        		/* set the empty value null And Formating the input data-6 */

        		/*  Record of Activity-6  */
        		$recOfActivity6 = formatDprone($recOfActivity6);
        		$recOfActivity6 = "'$recOfActivity6'";

        		/*  Colleges/Inst./ Tuitions-6  */
        		if(empty($insName6))
        			$insName6 = 'null';
        		else {
        			$insName6 = formatDprone($insName6);
        			$insName6 = "'$insName6'";
        		}

        		/*   Promoters (Teachers/Consultants)-6 */
        		if(empty($proName6))
        			$proName6 = 'null';
        		else {
        			$proName6 = formatDprone($proName6);
        			$proName6 = "'$proName6'";
        		}

        		/*  Parents (Ex/Present)-6  */
        		if(empty($parName6))
        			$parName6 = 'null';
        		else {
        			$parName6 = formatDprone($parName6);
        			$parName6 = "'$parName6'";
        		}

        		/* Prospective Students-6   */
        		if(empty($proStuName6))
        			$proStuName6 = 'null';
        		else {
        			$proStuName6 = formatDprone($proStuName6);
        			$proStuName6 = "'$proStuName6'";
        		}

        		/*  For Presentations-6  */
        		if(empty($dprOnePresentations6))
        			$dprOnePresentations6 = 'null';
        		else {
        			$dprOnePresentations6 = formatDprone($dprOneNoOfPromoters6);
        			$dprOnePresentations6 = "'$dprOnePresentations6'";
        		}

        		/*  No. of Promoters met and their details-6  */
        		if(empty($dprOneNoOfPromoters6))
        			$dprOneNoOfPromoters6 = 'null';
        		else {
        			$dprOneNoOfPromoters6 = formatDprone($dprOneNoOfPromoters6);
        			$dprOneNoOfPromoters6 = "'$dprOneNoOfPromoters6'";
        		}

        		/*  Parents met and their feedback-6  */
        		if(empty($dprOneParFeedback6))
        			$dprOneParFeedback6 = 'null';
        		else {
        			$dprOneParFeedback6 = formatDprone($dprOneParFeedback6);
        			$dprOneParFeedback6 = "'$dprOneParFeedback6'";
        		}

        		/*  Presentation made and the instituion detail-6  */
        		if(empty($dprOnePreAndInsDetails6))
        			$dprOnePreAndInsDetails6 = 'null';
        		else {
        			$dprOnePreAndInsDetails6 = formatDprone($dprOnePreAndInsDetails6);
        			$dprOnePreAndInsDetails6 = "'$dprOnePreAndInsDetails6'";
        		}

        		/* sql insert query-6   */
        		$query6 = "INSERT INTO dpr_one (id, recOfActivity, institutes, promoters, parents, proStudents, presentations, noOfPromoters, parFeedback, preAndInsDetails, year, dateOfDpr, submissionDate, course) VALUES($id, $recOfActivity6, $insName6, $proName6, $parName6, $proStuName6, $dprOnePresentations6, $dprOneNoOfPromoters6, $dprOneParFeedback6, $dprOnePreAndInsDetails6, $year, '$dateOfDpr', '$submissionDate', '$course');";
        		//echo $query6;
        		if (mysqli_query($conn_ggi,$query6)) {
        			$chk .= ',6';
        		}
        	}
        }

        if (isset($dprOne7) && (!empty($dprOne7)) && $dprOne7 == 'on') {
        	if (isset($recOfActivity7) && (!empty($recOfActivity7))) {

        		/* set the empty value null And Formating the input data-7 */

        		/*  Record of Activity-7  */
        		$recOfActivity7 = formatDprone($recOfActivity7);
        		$recOfActivity7 = "'$recOfActivity7'";

        		/*  Colleges/Inst./ Tuitions-7  */
        		if(empty($insName7))
        			$insName7 = 'null';
        		else {
        			$insName7 = formatDprone($insName7);
        			$insName7 = "'$insName7'";
        		}

        		/*   Promoters (Teachers/Consultants)-7 */
        		if(empty($proName7))
        			$proName7 = 'null';
        		else {
        			$proName7 = formatDprone($proName7);
        			$proName7 = "'$proName7'";
        		}

        		/*  Parents (Ex/Present)-7  */
        		if(empty($parName7))
        			$parName7 = 'null';
        		else {
        			$parName7 = formatDprone($parName7);
        			$parName7 = "'$parName7'";
        		}

        		/* Prospective Students-7   */
        		if(empty($proStuName7))
        			$proStuName7 = 'null';
        		else {
        			$proStuName7 = formatDprone($proStuName7);
        			$proStuName7 = "'$proStuName7'";
        		}

        		/*  For Presentations-7  */
        		if(empty($dprOnePresentations7))
        			$dprOnePresentations7 = 'null';
        		else {
        			$dprOnePresentations7 = formatDprone($dprOneNoOfPromoters7);
        			$dprOnePresentations7 = "'$dprOnePresentations7'";
        		}

        		/*  No. of Promoters met and their details-7  */
        		if(empty($dprOneNoOfPromoters7))
        			$dprOneNoOfPromoters7 = 'null';
        		else {
        			$dprOneNoOfPromoters7 = formatDprone($dprOneNoOfPromoters7);
        			$dprOneNoOfPromoters7 = "'$dprOneNoOfPromoters7'";
        		}

        		/*  Parents met and their feedback-7  */
        		if(empty($dprOneParFeedback7))
        			$dprOneParFeedback7 = 'null';
        		else {
        			$dprOneParFeedback7 = formatDprone($dprOneParFeedback7);
        			$dprOneParFeedback7 = "'$dprOneParFeedback7'";
        		}

        		/*  Presentation made and the instituion detail-7  */
        		if(empty($dprOnePreAndInsDetails7))
        			$dprOnePreAndInsDetails7 = 'null';
        		else {
        			$dprOnePreAndInsDetails7 = formatDprone($dprOnePreAndInsDetails7);
        			$dprOnePreAndInsDetails7 = "'$dprOnePreAndInsDetails7'";
        		}

        		/* sql insert query-7   */
        		$query7 = "INSERT INTO dpr_one (id, recOfActivity, institutes, promoters, parents, proStudents, presentations, noOfPromoters, parFeedback, preAndInsDetails, year, dateOfDpr, submissionDate, course) VALUES($id, $recOfActivity7, $insName7, $proName7, $parName7, $proStuName7, $dprOnePresentations7, $dprOneNoOfPromoters7, $dprOneParFeedback7, $dprOnePreAndInsDetails7, $year, '$dateOfDpr', '$submissionDate', '$course');";
        		//echo $query7;
        		if (mysqli_query($conn_ggi,$query7)) {
        			$chk .= ',7';
        		}
        	}
        }

        if (isset($dprOne8) && (!empty($dprOne8)) && $dprOne8 == 'on') {
        	if (isset($recOfActivity8) && (!empty($recOfActivity8))) {

        		/* set the empty value null And Formating the input data-8 */

        		/*  Record of Activity-8  */
        		$recOfActivity8 = formatDprone($recOfActivity8);
        		$recOfActivity8 = "'$recOfActivity8'";

        		/*  Colleges/Inst./ Tuitions-8  */
        		if(empty($insName8))
        			$insName8 = 'null';
        		else {
        			$insName8 = formatDprone($insName8);
        			$insName8 = "'$insName8'";
        		}

        		/*   Promoters (Teachers/Consultants)-8 */
        		if(empty($proName8))
        			$proName8 = 'null';
        		else {
        			$proName8 = formatDprone($proName8);
        			$proName8 = "'$proName8'";
        		}

        		/*  Parents (Ex/Present)-8  */
        		if(empty($parName8))
        			$parName8 = 'null';
        		else {
        			$parName8 = formatDprone($parName8);
        			$parName8 = "'$parName8'";
        		}

        		/* Prospective Students-8   */
        		if(empty($proStuName8))
        			$proStuName8 = 'null';
        		else {
        			$proStuName8 = formatDprone($proStuName8);
        			$proStuName8 = "'$proStuName8'";
        		}

        		/*  For Presentations-8  */
        		if(empty($dprOnePresentations8))
        			$dprOnePresentations8 = 'null';
        		else {
        			$dprOnePresentations8 = formatDprone($dprOneNoOfPromoters8);
        			$dprOnePresentations8 = "'$dprOnePresentations8'";
        		}

        		/*  No. of Promoters met and their details-8  */
        		if(empty($dprOneNoOfPromoters8))
        			$dprOneNoOfPromoters8 = 'null';
        		else {
        			$dprOneNoOfPromoters8 = formatDprone($dprOneNoOfPromoters8);
        			$dprOneNoOfPromoters8 = "'$dprOneNoOfPromoters8'";
        		}

        		/*  Parents met and their feedback-8  */
        		if(empty($dprOneParFeedback8))
        			$dprOneParFeedback8 = 'null';
        		else {
        			$dprOneParFeedback8 = formatDprone($dprOneParFeedback8);
        			$dprOneParFeedback8 = "'$dprOneParFeedback8'";
        		}

        		/*  Presentation made and the instituion detail-8  */
        		if(empty($dprOnePreAndInsDetails8))
        			$dprOnePreAndInsDetails8 = 'null';
        		else {
        			$dprOnePreAndInsDetails8 = formatDprone($dprOnePreAndInsDetails8);
        			$dprOnePreAndInsDetails8 = "'$dprOnePreAndInsDetails8'";
        		}

        		/* sql insert query-8   */
        		$query8 = "INSERT INTO dpr_one (id, recOfActivity, institutes, promoters, parents, proStudents, presentations, noOfPromoters, parFeedback, preAndInsDetails, year, dateOfDpr, submissionDate, course) VALUES($id, $recOfActivity8, $insName8, $proName8, $parName8, $proStuName8, $dprOnePresentations8, $dprOneNoOfPromoters8, $dprOneParFeedback8, $dprOnePreAndInsDetails8, $year, '$dateOfDpr', '$submissionDate', '$course');";
        		//echo $query8;
        		if (mysqli_query($conn_ggi,$query8)) {
        			$chk .= ',8';
        		}
        	}
        }

        if (isset($dprOne9) && (!empty($dprOne9)) && $dprOne9 == 'on') {
        	if (isset($recOfActivity9) && (!empty($recOfActivity9))) {

        		/* set the empty value null And Formating the input data-9 */

        		/*  Record of Activity-9  */
        		$recOfActivity9 = formatDprone($recOfActivity9);
        		$recOfActivity9 = "'$recOfActivity9'";

        		/*  Colleges/Inst./ Tuitions-9  */
        		if(empty($insName9))
        			$insName9 = 'null';
        		else {
        			$insName9 = formatDprone($insName9);
        			$insName9 = "'$insName9'";
        		}

        		/*   Promoters (Teachers/Consultants)-9 */
        		if(empty($proName9))
        			$proName9 = 'null';
        		else {
        			$proName9 = formatDprone($proName9);
        			$proName9 = "'$proName9'";
        		}

        		/*  Parents (Ex/Present)-9  */
        		if(empty($parName9))
        			$parName9 = 'null';
        		else {
        			$parName9 = formatDprone($parName9);
        			$parName9 = "'$parName9'";
        		}

        		/* Prospective Students-9   */
        		if(empty($proStuName9))
        			$proStuName9 = 'null';
        		else {
        			$proStuName9 = formatDprone($proStuName9);
        			$proStuName9 = "'$proStuName9'";
        		}

        		/*  For Presentations-9  */
        		if(empty($dprOnePresentations9))
        			$dprOnePresentations9 = 'null';
        		else {
        			$dprOnePresentations9 = formatDprone($dprOneNoOfPromoters9);
        			$dprOnePresentations9 = "'$dprOnePresentations9'";
        		}

        		/*  No. of Promoters met and their details-9  */
        		if(empty($dprOneNoOfPromoters9))
        			$dprOneNoOfPromoters9 = 'null';
        		else {
        			$dprOneNoOfPromoters9 = formatDprone($dprOneNoOfPromoters9);
        			$dprOneNoOfPromoters9 = "'$dprOneNoOfPromoters9'";
        		}

        		/*  Parents met and their feedback-9  */
        		if(empty($dprOneParFeedback9))
        			$dprOneParFeedback9 = 'null';
        		else {
        			$dprOneParFeedback9 = formatDprone($dprOneParFeedback9);
        			$dprOneParFeedback9 = "'$dprOneParFeedback9'";
        		}

        		/*  Presentation made and the instituion detail-9  */
        		if(empty($dprOnePreAndInsDetails9))
        			$dprOnePreAndInsDetails9 = 'null';
        		else {
        			$dprOnePreAndInsDetails9 = formatDprone($dprOnePreAndInsDetails9);
        			$dprOnePreAndInsDetails9 = "'$dprOnePreAndInsDetails9'";
        		}

        		/* sql insert query-9   */
        		$query9 = "INSERT INTO dpr_one (id, recOfActivity, institutes, promoters, parents, proStudents, presentations, noOfPromoters, parFeedback, preAndInsDetails, year, dateOfDpr, submissionDate, course) VALUES($id, $recOfActivity9, $insName9, $proName9, $parName9, $proStuName9, $dprOnePresentations9, $dprOneNoOfPromoters9, $dprOneParFeedback9, $dprOnePreAndInsDetails9, $year, '$dateOfDpr', '$submissionDate', '$course');";
        		//echo $query9;
        		if (mysqli_query($conn_ggi,$query9)) {
        			$chk .= ',9';
        		}
        	}
        }

        if (isset($dprOne10) && (!empty($dprOne10)) && $dprOne10 == 'on') {
        	if (isset($recOfActivity10) && (!empty($recOfActivity10))) {

        		/* set the empty value null And Formating the input data-10 */

        		/*  Record of Activity-10  */
        		$recOfActivity10 = formatDprone($recOfActivity10);
        		$recOfActivity10 = "'$recOfActivity10'";

        		/*  Colleges/Inst./ Tuitions-10  */
        		if(empty($insName10))
        			$insName10 = 'null';
        		else {
        			$insName10 = formatDprone($insName10);
        			$insName10 = "'$insName10'";
        		}

        		/*   Promoters (Teachers/Consultants)-10 */
        		if(empty($proName10))
        			$proName10 = 'null';
        		else {
        			$proName10 = formatDprone($proName10);
        			$proName10 = "'$proName10'";
        		}

        		/*  Parents (Ex/Present)-10  */
        		if(empty($parName10))
        			$parName10 = 'null';
        		else {
        			$parName10 = formatDprone($parName10);
        			$parName10 = "'$parName10'";
        		}

        		/* Prospective Students-10   */
        		if(empty($proStuName10))
        			$proStuName10 = 'null';
        		else {
        			$proStuName10 = formatDprone($proStuName10);
        			$proStuName10 = "'$proStuName10'";
        		}

        		/*  For Presentations-10  */
        		if(empty($dprOnePresentations10))
        			$dprOnePresentations10 = 'null';
        		else {
        			$dprOnePresentations10 = formatDprone($dprOneNoOfPromoters10);
        			$dprOnePresentations10 = "'$dprOnePresentations10'";
        		}

        		/*  No. of Promoters met and their details-10  */
        		if(empty($dprOneNoOfPromoters10))
        			$dprOneNoOfPromoters10 = 'null';
        		else {
        			$dprOneNoOfPromoters10 = formatDprone($dprOneNoOfPromoters10);
        			$dprOneNoOfPromoters10 = "'$dprOneNoOfPromoters10'";
        		}

        		/*  Parents met and their feedback-10  */
        		if(empty($dprOneParFeedback10))
        			$dprOneParFeedback10 = 'null';
        		else {
        			$dprOneParFeedback10 = formatDprone($dprOneParFeedback10);
        			$dprOneParFeedback10 = "'$dprOneParFeedback10'";
        		}

        		/*  Presentation made and the instituion detail-10  */
        		if(empty($dprOnePreAndInsDetails10))
        			$dprOnePreAndInsDetails10 = 'null';
        		else {
        			$dprOnePreAndInsDetails10 = formatDprone($dprOnePreAndInsDetails10);
        			$dprOnePreAndInsDetails10 = "'$dprOnePreAndInsDetails10'";
        		}

        		/* sql insert query-10   */
        		$query10 = "INSERT INTO dpr_one (id, recOfActivity, institutes, promoters, parents, proStudents, presentations, noOfPromoters, parFeedback, preAndInsDetails, year, dateOfDpr, submissionDate, course) VALUES($id, $recOfActivity10, $insName10, $proName10, $parName10, $proStuName10, $dprOnePresentations10, $dprOneNoOfPromoters10, $dprOneParFeedback10, $dprOnePreAndInsDetails10, $year, '$dateOfDpr', '$submissionDate', '$course');";
        		//echo $query10;
        		if (mysqli_query($conn_ggi,$query10)) {
        			$chk .= ',10';
                }
            }
        }

        /*  for success massege */
        if ($chk == '1') {
            ?>
            <script type="text/javascript">
                alert("1 (in DPR-1) is Successfully submitted");
                window.location="<?php echo DOMAIN; ?>applications/dpr.php";
            </script>
            <?php
        } else {
            ?>
            <script type="text/javascript">
                alert("<?php echo $chk; ?> (in DPR-1) is Successfully submitted");
                window.location="<?php echo DOMAIN; ?>applications/dpr.php";
            </script>
            <?php
        }
    }else {
    	/* else part is not required  */
    }

    /**************************************************************************************************************
      ***********************************************************   function ***************************************
      ***************************************************************************************************************/

    function formatDprone( $received ) {
        return (trim(strtolower(strip_tags($received))));
    }
?>
