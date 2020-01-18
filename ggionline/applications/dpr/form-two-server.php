<?php
    if (isset($submit) && (!empty($submit)) && $submit == "dprTwo") {
    	/* formating data */
    	//$id = formatDprTwo($_SWSSION['id']);
    	$id = $_SESSION['session_id'];
    	$year = date("Y");
    	$dateOfDpr = date("d-m-Y");
    	$submissionDate = date("d-m-Y");
    	$course = 'b-tech';
        //echo "<br />".$dprTwoDate."<br />".$dprTwoZoneName."<br />".$dprTwoSubmittedBy."<br />".$dprTwoSubmissionDate."<br />";

        if (isset($dprTwo1) && (!empty($dprTwo1)) && $dprTwo1 == 'on') {
        	if (isset($perDetails1) && (!empty($perDetails1))) {

        		/* set the empty value null And Formating the input data-1 */

        		/*  Details of the person-1  */
        		$perDetails1 = formatDprTwo($perDetails1);
        		$perDetails1 = "'$perDetails1'";

        		/*  No. of calls made for service and outcome-1  */
        		if(empty($noOfCalMade1))
        			$noOfCalMade1 = 0;
        		else {
        			$noOfCalMade1 = formatDprTwo($noOfCalMade1);
        			$noOfCalMade1 = $noOfCalMade1;
        		}

        		/*   No. of Students-1 */
        		if(empty($noOfStudents1))
        			$noOfStudents1 = 0;
        		else {
        			$noOfStudents1 = formatDprTwo($noOfStudents1);
        			$noOfStudents1 = $noOfStudents1;
        		}

        		/*  No. of Promoters-1  */
        		if(empty($noOfPromoters1))
        			$noOfPromoters1 = 0;
        		else {
        			$noOfPromoters1 = formatDprTwo($noOfPromoters1);
        			$noOfPromoters1 = $noOfPromoters1;
        		}

        		/* Through Direct Approach-1   */
        		if(empty($dirApproach1))
        			$dirApproach1 = 0;
        		else {
        			$dirApproach1 = formatDprTwo($dirApproach1);
        			$dirApproach1 = $dirApproach1;
        		}

        		/*  Through Promoters-1  */
        		if(empty($thrPromoters1))
        			$thrPromoters1 = 0;
        		else {
                    $thrPromoters1 = formatDprTwo($thrPromoters1);
        			$thrPromoters1 = $thrPromoters1;
        		}

        		/*  DD's Collected-1  */
        		if(empty($ddCollected1))
        			$ddCollected1 = 0;
        		else {
        			$ddCollected1 = formatDprTwo($ddCollected1);
        			$ddCollected1 = $ddCollected1;
        		}

        		/*  Documents Collected-1  */
        		if(empty($docCollected1))
        			$docCollected1 = 0;
        		else {
        			$docCollected1 = formatDprTwo($docCollected1);
        			$docCollected1 = $docCollected1;
        		}

        		/*  Note :- Remarks  should NOT be more than 100 words-1  */
        		if(empty($remarks1))
        			$remarks1 = 'null';
        		else {
        			$remarks1 = formatDprTwo($remarks1);
        			$remarks1 = "'$remarks1'";
        		}

        		/* sql insert query-1   */
        		$query1 = "INSERT INTO dpr_two (id, perDetails, noOfCalMade, noOfStudents, noOfPromoters, dirApproach, thrPromoters, ddCollected, docCollected, remarks, year, dateOfDpr, submissionDate, course) VALUES($id, $perDetails1, $noOfCalMade1, $noOfStudents1, $noOfPromoters1, $dirApproach1, $thrPromoters1, $ddCollected1, $docCollected1, $remarks1, $year, '$dateOfDpr', '$submissionDate', '$course');";
        		//echo $query1;
        		if (mysqli_query($conn_ggi,$query1)) {
        			$chk = '1';
        		}
        	}
        }

        if (isset($dprTwo2) && (!empty($dprTwo2)) && $dprTwo2 == 'on') {
        	if (isset($perDetails2) && (!empty($perDetails2))) {

        		/* set the empty value null And Formating the input data-2 */

        		/*  Details of the person-2  */
        		$perDetails2 = formatDprTwo($perDetails2);
        		$perDetails2 = "'$perDetails2'";

        		/*  No. of calls made for service and outcome-2  */
        		if(empty($noOfCalMade2))
        			$noOfCalMade2 = 0;
        		else {
        			$noOfCalMade2 = formatDprTwo($noOfCalMade2);
        			$noOfCalMade2 = $noOfCalMade2;
        		}

        		/*   No. of Students-2 */
        		if(empty($noOfStudents2))
        			$noOfStudents2 = 0;
        		else {
        			$noOfStudents2 = formatDprTwo($noOfStudents2);
        			$noOfStudents2 = $noOfStudents2;
        		}

        		/*  No. of Promoters-2  */
        		if(empty($noOfPromoters2))
        			$noOfPromoters2 = 0;
        		else {
        			$noOfPromoters2 = formatDprTwo($noOfPromoters2);
        			$noOfPromoters2 = $noOfPromoters2;
        		}

        		/* Through Direct Approach-2   */
        		if(empty($dirApproach2))
        			$dirApproach2 = 0;
        		else {
        			$dirApproach2 = formatDprTwo($dirApproach2);
        			$dirApproach2 = $dirApproach2;
        		}

        		/*  Through Promoters-2  */
        		if(empty($thrPromoters2))
        			$thrPromoters2 = 0;
        		else {
        			$thrPromoters2 = formatDprTwo($ddCollected2);
        			$thrPromoters2 = $thrPromoters2;
        		}

        		/*  DD's Collected-2  */
        		if(empty($ddCollected2))
        			$ddCollected2 = 0;
        		else {
        			$dprTwoNoOfPromoter2 = formatDprTwo($ddCollected2);
        			$ddCollected2 = $ddCollected2;
        		}

        		/*  Documents Collected-2  */
        		if(empty($docCollected2))
        			$docCollected2 = 0;
        		else {
        			$docCollected2 = formatDprTwo($docCollected2);
        			$docCollected2 = $docCollected2;
        		}

        		/*  Note :- Remarks  should NOT be more than 100 words-2  */
        		if(empty($remarks2))
        			$remarks2 = 'null';
        		else {
        			$remarks2 = formatDprTwo($remarks2);
        			$remarks2 = "'$remarks2'";
        		}

        		/* sql insert query-2   */
        		$query2 = "INSERT INTO dpr_two (id, perDetails, noOfCalMade, noOfStudents, noOfPromoters, dirApproach, thrPromoters, ddCollected, docCollected, remarks, year, dateOfDpr, submissionDate, course) VALUES($id, $perDetails2, $noOfCalMade2, $noOfStudents2, $noOfPromoters2, $dirApproach2, $thrPromoters2, $ddCollected2, $docCollected2, $remarks2, $year, '$dateOfDpr', '$submissionDate', '$course');";
        		//echo $query2;
        		if (mysqli_query($conn_ggi,$query2)) {
        			$chk .= ',2';
        		}
        	}
        }

        if (isset($dprTwo3) && (!empty($dprTwo3)) && $dprTwo3 == 'on') {
            if (isset($perDetails3) && (!empty($perDetails3))) {

                /* set the empty value null And Formating the input data-3 */

                /*  Details of the person-3  */
                $perDetails3 = formatDprTwo($perDetails3);
                $perDetails3 = "'$perDetails3'";

                /*  No. of calls made for service and outcome-3  */
                if(empty($noOfCalMade3))
                    $noOfCalMade3 = 0;
                else {
                    $noOfCalMade3 = formatDprTwo($noOfCalMade3);
                    $noOfCalMade3 = $noOfCalMade3;
                }

                /*   No. of Students-3 */
                if(empty($noOfStudents3))
                    $noOfStudents3 = 0;
                else {
                    $noOfStudents3 = formatDprTwo($noOfStudents3);
                    $noOfStudents3 = $noOfStudents3;
                }

                /*  No. of Promoters-3  */
                if(empty($noOfPromoters3))
                    $noOfPromoters3 = 0;
                else {
                    $noOfPromoters3 = formatDprTwo($noOfPromoters3);
                    $noOfPromoters3 = $noOfPromoters3;
                }

                /* Through Direct Approach-3   */
                if(empty($dirApproach3))
                    $dirApproach3 = 0;
                else {
                    $dirApproach3 = formatDprTwo($dirApproach3);
                    $dirApproach3 = $dirApproach3;
                }

                /*  Through Promoters-3  */
                if(empty($thrPromoters3))
                    $thrPromoters3 = 0;
                else {
                    $thrPromoters3 = formatDprTwo($ddCollected3);
                    $thrPromoters3 = $thrPromoters3;
                }

                /*  DD's Collected-3  */
                if(empty($ddCollected3))
                    $ddCollected3 = 0;
                else {
                    $ddCollected3 = formatDprTwo($ddCollected3);
                    $ddCollected3 = $ddCollected3;
                }

                /*  Documents Collected-3  */
                if(empty($docCollected3))
                    $docCollected3 = 0;
                else {
                    $docCollected3 = formatDprTwo($docCollected3);
                    $docCollected3 = $docCollected3;
                }

                /*  Note :- Remarks  should NOT be more than 100 words-3  */
                if(empty($remarks3))
                    $remarks3 = 'null';
                else {
                    $remarks3 = formatDprTwo($remarks3);
                    $remarks3 = "'$remarks3'";
                }

                /* sql insert query-3   */
                $query3 = "INSERT INTO dpr_two (id, perDetails, noOfCalMade, noOfStudents, noOfPromoters, dirApproach, thrPromoters, ddCollected, docCollected, remarks, year, dateOfDpr, submissionDate, course) VALUES($id, $perDetails3, $noOfCalMade3, $noOfStudents3, $noOfPromoters3, $dirApproach3, $thrPromoters3, $ddCollected3, $docCollected3, $remarks3, $year, '$dateOfDpr', '$submissionDate', '$course');";
                //echo $query3;
                if (mysqli_query($conn_ggi,$query3)) {
                    $chk .= ',3';
                }
            }
        }

        if (isset($dprTwo4) && (!empty($dprTwo4)) && $dprTwo4 == 'on') {
            if (isset($perDetails4) && (!empty($perDetails4))) {

                /* set the empty value null And Formating the input data-4 */

                /*  Details of the person-4  */
                $perDetails4 = formatDprTwo($perDetails4);
                $perDetails4 = "'$perDetails4'";

                /*  No. of calls made for service and outcome-4  */
                if(empty($noOfCalMade4))
                    $noOfCalMade4 = 0;
                else {
                    $noOfCalMade4 = formatDprTwo($noOfCalMade4);
                    $noOfCalMade4 = $noOfCalMade4;
                }

                /*   No. of Students-4 */
                if(empty($noOfStudents4))
                    $noOfStudents4 = 0;
                else {
                    $noOfStudents4 = formatDprTwo($noOfStudents4);
                    $noOfStudents4 = $noOfStudents4;
                }

                /*  No. of Promoters-4  */
                if(empty($noOfPromoters4))
                    $noOfPromoters4 = 0;
                else {
                    $noOfPromoters4 = formatDprTwo($noOfPromoters4);
                    $noOfPromoters4 = $noOfPromoters4;
                }

                /* Through Direct Approach-4   */
                if(empty($dirApproach4))
                    $dirApproach4 = 0;
                else {
                    $dirApproach4 = formatDprTwo($dirApproach4);
                    $dirApproach4 = $dirApproach4;
                }

                /*  Through Promoters-4  */
                if(empty($thrPromoters4))
                    $thrPromoters4 = 0;
                else {
                    $thrPromoters4 = formatDprTwo($ddCollected4);
                    $thrPromoters4 = $thrPromoters4;
                }

                /*  DD's Collected-4  */
                if(empty($ddCollected4))
                    $ddCollected4 = 0;
                else {
                    $ddCollected4 = formatDprTwo($ddCollected4);
                    $ddCollected4 = $ddCollected4;
                }

                /*  Documents Collected-4  */
                if(empty($docCollected4))
                    $docCollected4 = 0;
                else {
                    $docCollected4 = formatDprTwo($docCollected4);
                    $docCollected4 = $docCollected4;
                }

                /*  Note :- Remarks  should NOT be more than 100 words-4  */
                if(empty($remarks4))
                    $remarks4 = 'null';
                else {
                    $remarks4 = formatDprTwo($remarks4);
                    $remarks4 = "'$remarks4'";
                }

                /* sql insert query-4   */
                $query4 = "INSERT INTO dpr_two (id, perDetails, noOfCalMade, noOfStudents, noOfPromoters, dirApproach, thrPromoters, ddCollected, docCollected, remarks, year, dateOfDpr, submissionDate, course) VALUES($id, $perDetails4, $noOfCalMade4, $noOfStudents4, $noOfPromoters4, $dirApproach4, $thrPromoters4, $ddCollected4, $docCollected4, $remarks4, $year, '$dateOfDpr', '$submissionDate', '$course');";
                //echo $query4;
                if (mysqli_query($conn_ggi,$query4)) {
                    $chk .= ',4';
                }
            }
        }

        if (isset($dprTwo5) && (!empty($dprTwo5)) && $dprTwo5 == 'on') {
            if (isset($perDetails5) && (!empty($perDetails5))) {

                /* set the empty value null And Formating the input data-5 */

                /*  Details of the person-5  */
                $perDetails5 = formatDprTwo($perDetails5);
                $perDetails5 = "'$perDetails5'";

                /*  No. of calls made for service and outcome-5  */
                if(empty($noOfCalMade5))
                    $noOfCalMade5 = 0;
                else {
                    $noOfCalMade5 = formatDprTwo($noOfCalMade5);
                    $noOfCalMade5 = $noOfCalMade5;
                }

                /*   No. of Students-5 */
                if(empty($noOfStudents5))
                    $noOfStudents5 = 0;
                else {
                    $noOfStudents5 = formatDprTwo($noOfStudents5);
                    $noOfStudents5 = $noOfStudents5;
                }

                /*  No. of Promoters-5  */
                if(empty($noOfPromoters5))
                    $noOfPromoters5 = 0;
                else {
                    $noOfPromoters5 = formatDprTwo($noOfPromoters5);
                    $noOfPromoters5 = $noOfPromoters5;
                }

                /* Through Direct Approach-5   */
                if(empty($dirApproach5))
                    $dirApproach5 = 0;
                else {
                    $dirApproach5 = formatDprTwo($dirApproach5);
                    $dirApproach5 = $dirApproach5;
                }

                /*  Through Promoters-5  */
                if(empty($thrPromoters5))
                    $thrPromoters5 = 0;
                else {
                    $thrPromoters5 = formatDprTwo($ddCollected5);
                    $thrPromoters5 = $thrPromoters5;
                }

                /*  DD's Collected-5  */
                if(empty($ddCollected5))
                    $ddCollected5 = 0;
                else {
                    $ddCollected5 = formatDprTwo($ddCollected5);
                    $ddCollected5 = $ddCollected5;
                }

                /*  Documents Collected-5  */
                if(empty($docCollected5))
                    $docCollected5 = 0;
                else {
                    $docCollected5 = formatDprTwo($docCollected5);
                    $docCollected5 = $docCollected5;
                }

                /*  Note :- Remarks  should NOT be more than 100 words-5  */
                if(empty($remarks5))
                    $remarks5 = 'null';
                else {
                    $remarks5 = formatDprTwo($remarks5);
                    $remarks5 = "'$remarks5'";
                }

                /* sql insert query-5   */
                $query5 = "INSERT INTO dpr_two (id, perDetails, noOfCalMade, noOfStudents, noOfPromoters, dirApproach, thrPromoters, ddCollected, docCollected, remarks, year, dateOfDpr, submissionDate, course) VALUES($id, $perDetails5, $noOfCalMade5, $noOfStudents5, $noOfPromoters5, $dirApproach5, $thrPromoters5, $ddCollected5, $docCollected5, $remarks5, $year, '$dateOfDpr', '$submissionDate', '$course');";
                //echo $query5;
                if (mysqli_query($conn_ggi,$query5)) {
                    $chk .= ',5';
                }
            }
        }

        if (isset($dprTwo6) && (!empty($dprTwo6)) && $dprTwo6 == 'on') {
            if (isset($perDetails6) && (!empty($perDetails6))) {

                /* set the empty value null And Formating the input data-6 */

                /*  Details of the person-6  */
                $perDetails6 = formatDprTwo($perDetails6);
                $perDetails6 = "'$perDetails6'";

                /*  No. of calls made for service and outcome-6  */
                if(empty($noOfCalMade6))
                    $noOfCalMade6 = 0;
                else {
                    $noOfCalMade6 = formatDprTwo($noOfCalMade6);
                    $noOfCalMade6 = $noOfCalMade6;
                }

                /*   No. of Students-6 */
                if(empty($noOfStudents6))
                    $noOfStudents6 = 0;
                else {
                    $noOfStudents6 = formatDprTwo($noOfStudents6);
                    $noOfStudents6 = $noOfStudents6;
                }

                /*  No. of Promoters-6  */
                if(empty($noOfPromoters6))
                    $noOfPromoters6 = 0;
                else {
                    $noOfPromoters6 = formatDprTwo($noOfPromoters6);
                    $noOfPromoters6 = $noOfPromoters6;
                }

                /* Through Direct Approach-6   */
                if(empty($dirApproach6))
                    $dirApproach6 = 0;
                else {
                    $dirApproach6 = formatDprTwo($dirApproach6);
                    $dirApproach6 = $dirApproach6;
                }

                /*  Through Promoters-6  */
                if(empty($thrPromoters6))
                    $thrPromoters6 = 0;
                else {
                    $thrPromoters6 = formatDprTwo($ddCollected6);
                    $thrPromoters6 = $thrPromoters6;
                }

                /*  DD's Collected-6  */
                if(empty($ddCollected6))
                    $ddCollected6 = 0;
                else {
                    $ddCollected6 = formatDprTwo($ddCollected6);
                    $ddCollected6 = $ddCollected6;
                }

                /*  Documents Collected-6  */
                if(empty($docCollected6))
                    $docCollected6 = 0;
                else {
                    $docCollected6 = formatDprTwo($docCollected6);
                    $docCollected6 = $docCollected6;
                }

                /*  Note :- Remarks  should NOT be more than 100 words-6  */
                if(empty($remarks6))
                    $remarks6 = 'null';
                else {
                    $remarks6 = formatDprTwo($remarks6);
                    $remarks6 = "'$remarks6'";
                }

                /* sql insert query-6   */
                $query6 = "INSERT INTO dpr_two (id, perDetails, noOfCalMade, noOfStudents, noOfPromoters, dirApproach, thrPromoters, ddCollected, docCollected, remarks, year, dateOfDpr, submissionDate, course) VALUES($id, $perDetails6, $noOfCalMade6, $noOfStudents6, $noOfPromoters6, $dirApproach6, $thrPromoters6, $ddCollected6, $docCollected6, $remarks6, $year, '$dateOfDpr', '$submissionDate', '$course');";
                //echo $query6;
                if (mysqli_query($conn_ggi,$query6)) {
                    $chk .= ',6';
                }
            }
        }

        if (isset($dprTwo7) && (!empty($dprTwo7)) && $dprTwo7 == 'on') {
            if (isset($perDetails7) && (!empty($perDetails7))) {

                /* set the empty value null And Formating the input data-7 */

                /*  Details of the person-7  */
                $perDetails7 = formatDprTwo($perDetails7);
                $perDetails7 = "'$perDetails7'";

                /*  No. of calls made for service and outcome-7  */
                if(empty($noOfCalMade7))
                    $noOfCalMade7 = 0;
                else {
                    $noOfCalMade7 = formatDprTwo($noOfCalMade7);
                    $noOfCalMade7 = $noOfCalMade7;
                }

                /*   No. of Students-7 */
                if(empty($noOfStudents7))
                    $noOfStudents7 = 0;
                else {
                    $noOfStudents7 = formatDprTwo($noOfStudents7);
                    $noOfStudents7 = $noOfStudents7;
                }

                /*  No. of Promoters-7  */
                if(empty($noOfPromoters7))
                    $noOfPromoters7 = 0;
                else {
                    $noOfPromoters7 = formatDprTwo($noOfPromoters7);
                    $noOfPromoters7 = $noOfPromoters7;
                }

                /* Through Direct Approach-7   */
                if(empty($dirApproach7))
                    $dirApproach7 = 0;
                else {
                    $dirApproach7 = formatDprTwo($dirApproach7);
                    $dirApproach7 = $dirApproach7;
                }

                /*  Through Promoters-7  */
                if(empty($thrPromoters7))
                    $thrPromoters7 = 0;
                else {
                    $thrPromoters7 = formatDprTwo($ddCollected7);
                    $thrPromoters7 = $thrPromoters7;
                }

                /*  DD's Collected-7  */
                if(empty($ddCollected7))
                    $ddCollected7 = 0;
                else {
                    $ddCollected7 = formatDprTwo($ddCollected7);
                    $ddCollected7 = $ddCollected7;
                }

                /*  Documents Collected-7  */
                if(empty($docCollected7))
                    $docCollected7 = 0;
                else {
                    $docCollected7 = formatDprTwo($docCollected7);
                    $docCollected7 = $docCollected7;
                }

                /*  Note :- Remarks  should NOT be more than 100 words-7  */
                if(empty($remarks7))
                    $remarks7 = 'null';
                else {
                    $remarks7 = formatDprTwo($remarks7);
                    $remarks7 = "'$remarks7'";
                }

                /* sql insert query-7   */
                $query7 = "INSERT INTO dpr_two (id, perDetails, noOfCalMade, noOfStudents, noOfPromoters, dirApproach, thrPromoters, ddCollected, docCollected, remarks, year, dateOfDpr, submissionDate, course) VALUES($id, $perDetails7, $noOfCalMade7, $noOfStudents7, $noOfPromoters7, $dirApproach7, $thrPromoters7, $ddCollected7, $docCollected7, $remarks7, $year, '$dateOfDpr', '$submissionDate', '$course');";
                //echo $query7;
                if (mysqli_query($conn_ggi,$query7)) {
                    $chk .= ',7';
                }
            }
        }

        if (isset($dprTwo8) && (!empty($dprTwo8)) && $dprTwo8 == 'on') {
            if (isset($perDetails8) && (!empty($perDetails8))) {

                /* set the empty value null And Formating the input data-8 */

                /*  Details of the person-8  */
                $perDetails8 = formatDprTwo($perDetails8);
                $perDetails8 = "'$perDetails8'";

                /*  No. of calls made for service and outcome-8  */
                if(empty($noOfCalMade8))
                    $noOfCalMade8 = 0;
                else {
                    $noOfCalMade8 = formatDprTwo($noOfCalMade8);
                    $noOfCalMade8 = $noOfCalMade8;
                }

                /*   No. of Students-8 */
                if(empty($noOfStudents8))
                    $noOfStudents8 = 0;
                else {
                    $noOfStudents8 = formatDprTwo($noOfStudents8);
                    $noOfStudents8 = $noOfStudents8;
                }

                /*  No. of Promoters-8  */
                if(empty($noOfPromoters8))
                    $noOfPromoters8 = 0;
                else {
                    $noOfPromoters8 = formatDprTwo($noOfPromoters8);
                    $noOfPromoters8 = $noOfPromoters8;
                }

                /* Through Direct Approach-8   */
                if(empty($dirApproach8))
                    $dirApproach8 = 0;
                else {
                    $dirApproach8 = formatDprTwo($dirApproach8);
                    $dirApproach8 = $dirApproach8;
                }

                /*  Through Promoters-8  */
                if(empty($thrPromoters8))
                    $thrPromoters8 = 0;
                else {
                    $thrPromoters8 = formatDprTwo($ddCollected8);
                    $thrPromoters8 = $thrPromoters8;
                }

                /*  DD's Collected-8  */
                if(empty($ddCollected8))
                    $ddCollected8 = 0;
                else {
                    $ddCollected8 = formatDprTwo($ddCollected8);
                    $ddCollected8 = $ddCollected8;
                }

                /*  Documents Collected-8  */
                if(empty($docCollected8))
                    $docCollected8 = 0;
                else {
                    $docCollected8 = formatDprTwo($docCollected8);
                    $docCollected8 = $docCollected8;
                }

                /*  Note :- Remarks  should NOT be more than 100 words-8  */
                if(empty($remarks8))
                    $remarks8 = 'null';
                else {
                    $remarks8 = formatDprTwo($remarks8);
                    $remarks8 = "'$remarks8'";
                }

                /* sql insert query-8   */
                $query8 = "INSERT INTO dpr_two (id, perDetails, noOfCalMade, noOfStudents, noOfPromoters, dirApproach, thrPromoters, ddCollected, docCollected, remarks, year, dateOfDpr, submissionDate, course) VALUES($id, $perDetails8, $noOfCalMade8, $noOfStudents8, $noOfPromoters8, $dirApproach8, $thrPromoters8, $ddCollected8, $docCollected8, $remarks8, $year, '$dateOfDpr', '$submissionDate', '$course');";
                //echo $query8;
                if (mysqli_query($conn_ggi,$query8)) {
                    $chk .= ',8';
                }
            }
        }

        if (isset($dprTwo9) && (!empty($dprTwo9)) && $dprTwo9 == 'on') {
            if (isset($perDetails9) && (!empty($perDetails9))) {

                /* set the empty value null And Formating the input data-9 */

                /*  Details of the person-9  */
                $perDetails9 = formatDprTwo($perDetails9);
                $perDetails9 = "'$perDetails9'";

                /*  No. of calls made for service and outcome-9  */
                if(empty($noOfCalMade9))
                    $noOfCalMade9 = 0;
                else {
                    $noOfCalMade9 = formatDprTwo($noOfCalMade9);
                    $noOfCalMade9 = $noOfCalMade9;
                }

                /*   No. of Students-9 */
                if(empty($noOfStudents9))
                    $noOfStudents9 = 0;
                else {
                    $noOfStudents9 = formatDprTwo($noOfStudents9);
                    $noOfStudents9 = $noOfStudents9;
                }

                /*  No. of Promoters-9  */
                if(empty($noOfPromoters9))
                    $noOfPromoters9 = 0;
                else {
                    $noOfPromoters9 = formatDprTwo($noOfPromoters9);
                    $noOfPromoters9 = $noOfPromoters9;
                }

                /* Through Direct Approach-9   */
                if(empty($dirApproach9))
                    $dirApproach9 = 0;
                else {
                    $dirApproach9 = formatDprTwo($dirApproach9);
                    $dirApproach9 = $dirApproach9;
                }

                /*  Through Promoters-9  */
                if(empty($thrPromoters9))
                    $thrPromoters9 = 0;
                else {
                    $thrPromoters9 = formatDprTwo($ddCollected9);
                    $thrPromoters9 = $thrPromoters9;
                }

                /*  DD's Collected-9  */
                if(empty($ddCollected9))
                    $ddCollected9 = 0;
                else {
                    $ddCollected9 = formatDprTwo($ddCollected9);
                    $ddCollected9 = $ddCollected9;
                }

                /*  Documents Collected-9  */
                if(empty($docCollected9))
                    $docCollected9 = 0;
                else {
                    $docCollected9 = formatDprTwo($docCollected9);
                    $docCollected9 = $docCollected9;
                }

                /*  Note :- Remarks  should NOT be more than 100 words-9  */
                if(empty($remarks9))
                    $remarks9 = 'null';
                else {
                    $remarks9 = formatDprTwo($remarks9);
                    $remarks9 = "'$remarks9'";
                }

                /* sql insert query-9   */
                $query9 = "INSERT INTO dpr_two (id, perDetails, noOfCalMade, noOfStudents, noOfPromoters, dirApproach, thrPromoters, ddCollected, docCollected, remarks, year, dateOfDpr, submissionDate, course) VALUES($id, $perDetails9, $noOfCalMade9, $noOfStudents9, $noOfPromoters9, $dirApproach9, $thrPromoters9, $ddCollected9, $docCollected9, $remarks9, $year, '$dateOfDpr', '$submissionDate', '$course');";
                //echo $query9;
                if (mysqli_query($conn_ggi,$query9)) {
                    $chk .= ',9';
                }
            }
        }

        if (isset($dprTwo10) && (!empty($dprTwo10)) && $dprTwo10 == 'on') {
            if (isset($perDetails10) && (!empty($perDetails10))) {

                /* set the empty value null And Formating the input data-10 */

                /*  Details of the person-10  */
                $perDetails10 = formatDprTwo($perDetails10);
                $perDetails10 = "'$perDetails10'";

                /*  No. of calls made for service and outcome-10  */
                if(empty($noOfCalMade10))
                    $noOfCalMade10 = 0;
                else {
                    $noOfCalMade10 = formatDprTwo($noOfCalMade10);
                    $noOfCalMade10 = $noOfCalMade10;
                }

                /*   No. of Students-10 */
                if(empty($noOfStudents10))
                    $noOfStudents10 = 0;
                else {
                    $noOfStudents10 = formatDprTwo($noOfStudents10);
                    $noOfStudents10 = $noOfStudents10;
                }

                /*  No. of Promoters-10  */
                if(empty($noOfPromoters10))
                    $noOfPromoters10 = 0;
                else {
                    $noOfPromoters10 = formatDprTwo($noOfPromoters10);
                    $noOfPromoters10 = $noOfPromoters10;
                }

                /* Through Direct Approach-10   */
                if(empty($dirApproach10))
                    $dirApproach10 = 0;
                else {
                    $dirApproach10 = formatDprTwo($dirApproach10);
                    $dirApproach10 = $dirApproach10;
                }

                /*  Through Promoters-10  */
                if(empty($thrPromoters10))
                    $thrPromoters10 = 0;
                else {
                    $thrPromoters10 = formatDprTwo($ddCollected10);
                    $thrPromoters10 = $thrPromoters10;
                }

                /*  DD's Collected-10  */
                if(empty($ddCollected10))
                    $ddCollected10 = 0;
                else {
                    $ddCollected10 = formatDprTwo($ddCollected10);
                    $ddCollected10 = $ddCollected10;
                }

                /*  Documents Collected-10  */
                if(empty($docCollected10))
                    $docCollected10 = 0;
                else {
                    $docCollected10 = formatDprTwo($docCollected10);
                    $docCollected10 = $docCollected10;
                }

                /*  Note :- Remarks  should NOT be more than 100 words-10  */
                if(empty($remarks10))
                    $remarks10 = 'null';
                else {
                    $remarks10 = formatDprTwo($remarks10);
                    $remarks10 = "'$remarks10'";
                }

                /* sql insert query-10   */
                $query10 = "INSERT INTO dpr_two (id, perDetails, noOfCalMade, noOfStudents, noOfPromoters, dirApproach, thrPromoters, ddCollected, docCollected, remarks, year, dateOfDpr, submissionDate, course) VALUES($id, $perDetails10, $noOfCalMade10, $noOfStudents10, $noOfPromoters10, $dirApproach10, $thrPromoters10, $ddCollected10, $docCollected10, $remarks10, $year, '$dateOfDpr', '$submissionDate', '$course');";
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
                alert("1 (in DPR-2) is Successfully submitted");
                window.location="<?php echo DOMAIN; ?>applications/dpr.php";
            </script>
            <?php
        } else {
            ?>
            <script type="text/javascript">
                alert("<?php echo $chk; ?> (in DPR-2) is Successfully submitted");
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

    function formatDprTwo( $received ) {
        return (trim(strtolower(strip_tags($received))));
    }
?>
