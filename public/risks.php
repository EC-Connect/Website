<?php
$content = <<<EOF
<!-- Content Container -->
<div class="container">
    <br/>
    <br/>
    <br/>

    <div>
        <h1>Risk Matrix</h1>
        <hr>
        <table style="width:100%;">
            <tbody>
            <tr>
                <td style="width: 60px;"></td>
                <td style="font-weight:bold;text-align:right;padding-bottom: 10px;">Impact</td>
            </tr>
            <tr>
                <td style="border: none; vertical-align:bottom;">
                    <div class="rotate90"
                         style="font-weight:bold;margin-bottom: 65px;margin-left: -20px;margin-right: -30px;">
                        Probability
                    </div>
                </td>
                <td>
                    <div class="">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th class="col-xs-1"></th>
                                <th style="text-align:center" class="col-sm-2">1</th>
                                <th style="text-align:center" class="col-sm-2">2</th>
                                <th style="text-align:center" class="col-sm-2">3</th>
                                <th style="text-align:center" class="col-sm-2">4</th>
                                <th style="text-align:center" class="col-sm-2">5</th>
                            </tr>
                            <tr>
                                <td class="left-header">5</td>
                                <td align="center" class="warning"></td>
                                <td align="center" class="warning"></td>
                                <td align="center" class="danger"></td>
                                <td align="center" class="danger"></td>
                                <td align="center" class="danger"></td>
                            </tr>
                            <tr>
                                <td class="left-header">4</td>
                                <td align="center" class="warning"></td>
                                <td align="center" class="warning"></td>
                                <td align="center" class="warning"><a class="btn btn-warning btn-s" href="#t1">T1</a></td>
                                <td align="center" class="danger"></td>
                                <td align="center" class="danger"></td>
                            </tr>
                            <tr>
                                <td class="left-header">3</td>
                                <td align="center" class="success"><a class="btn btn-success btn-s" href="#t5">T5</a></td>
                                <td align="center" class="warning"><a class="btn btn-warning btn-s" href="#t4">T4</a></td>
                                <td align="center" class="warning"><a class="btn btn-warning btn-s" href="#t2">T2</a></td>
                                <td align="center" class="warning"></td>
                                <td align="center" class="danger"></td>
                            </tr>
                            <tr>
                                <td class="left-header">2</td>
                                <td align="center" class="success"></td>
                                <td align="center" class="success"></td>
                                <td align="center" class="warning"><a class="btn btn-warning btn-s" href="#c2">C2</a></td>
                                <td align="center" class="warning"><a class="btn btn-warning btn-s" href="#c1">C1</a></td>
                                <td align="center" class="warning"></td>
                            </tr>
                            <tr>
                                <td class="left-header">1</td>
                                <td align="center" class="success"></td>
                                <td align="center" class="success"></td>
                                <td align="center" class="success"><a class="btn btn-success btn-s" href="#c3">C3</a>&nbsp;<a class="btn btn-success btn-s" href="#t3">T3</a></td>
                                <td align="center" class="warning"></td>
                                <td align="center" class="warning"><a class="btn btn-warning btn-s" href="#c4">C4</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
        <h2>Customer Risks</h2>

        <div>
        	<div>
		    	<a name="c1"></a>
		       	<h4>C1: Customer dislikes the solution</h4>
		       	<ul>
		        	<li>Description: If the customer dislikes the solution it will not be used.</li>
		            <li>Probability: 2</li>
		            <li>Impact: 4</li>
		            <li>Mitigation: Mentor involvement during development.</li>
		    	</ul>
            </div>
            <div>
                <a name="c2"></a>
                <h4>C2: Incorrect Usage</h4>
                <ul>
                    <li>Description: End user has trouble working through the use of the solution.</li>
                    <li>Probability: 2</li>
                    <li>Impact: 3</li>
                    <li>Mitigation: Simple interface with thorough pre-launch testing.</li>
                </ul>
            </div>
            <div>
                <a name="c3"></a>
                <h4>C3: Solution Awareness</h4>
                <ul>
                    <li>Description: If the end user is not able to locate the solution then the project is moot. </li>
                    <li>Probability: 1</li>
                    <li>Impact: 3</li>
                    <li>Mitigation: Mentor involvement during deployment and campus wide email notifications.</li>
                </ul>
            </div>
			<div>
                <a name="c4"></a>
                <h4>C4: Fails to connect users</h4>
                <ul>
                    <li>Description: If the solution is ineffective at connecting stakeholders then it fails it's primary objective. </li>
                    <li>Probability: 1</li>
                    <li>Impact: 5</li>
                    <li>Mitigation: Develop an extensive list of test cases and scenarios and ensure the solution passes all of them.</li>
                </ul>
            </div>
        </div>

        <h2>Technical Risks</h2>

        <div>
            <div>
                <a name="t1"></a>
                <h4>T1: Security</h4>
                <ul>
                    <li>Description: Protect data of end users who signup from malicious users.</li>
                    <li>Probability: 4</li>
                    <li>Impact: 3</li>
                    <li>Mitigation: Follow best practices during development.</li>
                </ul>
            </div>
            <div>
                <a name="t2"></a>
                <h4>T2: Data Privacy</h4>
                <ul>
                    <li>Description: Protect users data from unauthorized access.</li>
                    <li>Probability: 3</li>
                    <li>Impact: 3</li>
                    <li>Mitigation: Review access restrictions with mentor during development.</li>
                </ul>
            </div>
            <div>
                <a name="t3"></a>
                <h4>T3: Performance</h4>
                <ul>
                    <li>Description: Users may be discouraged from using the solution if the service is slow.</li>
                    <li>Probability: 1</li>
                    <li>Impact: 3</li>
                    <li>Mitigation: Performance testing during development and optimization.</li>
                </ul>
            </div>
            <div>
                <a name="t4"></a>
                <h4>T4: Maintainability</h4>
                <ul>
                    <li>Description: The solution should be maintainable by other developers.</li>
                    <li>Probability: 3</li>
                    <li>Impact: 2</li>
                    <li>Mitigation: The system should incorporate best practices and existing frameworks to avoid learning overhead.</li>
                </ul>
            </div>
            <div>
                <a name="t5"></a>
                <h4>T5: Flexibility</h4>
                <ul>
                    <li>Description: Is the application able to be used beyond ODU?</li>
                    <li>Probability: 3</li>
                    <li>Impact: 1</li>
                    <li>Mitigation: Design the system such that it can be easily adapted to other universities.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Content Container -->
EOF;
require_once('display.php');
