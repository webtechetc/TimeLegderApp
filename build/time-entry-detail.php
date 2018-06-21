<!DOCTYPE html>
<html lang="en">
   <?php
  include_once "head.php";
  ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
         <!-- sidebar left -->
        <?php
        include_once "sidebar.php";
        ?>
        <!-- sidebar left end -->

        <!-- top navigation -->
        <?php
          include_once "nav.php";
          ?>
        <!-- /top navigation -->

         <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <!-- <div class="page-title">
              <div class="title_left">
                <br>
                <p>Dashboard / Time Entry Detail</p>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form class=" form-inline form-group text-center">
                    <div class="checkbox  checkbox-success">
                           <input type="checkbox" id="" value="">
                            <label for="">Show Inactive Items As Well  </label>
                     </div>
                     <div class="checkbox  checkbox-success ">
                           <input type="checkbox" id="" value="">
                            <label for="">Show Only Inactive Items </label>
                     </div>
                  </form>
                  
               
                   <form class="form-inline text-center  " style="margin-bottom: 20px;">
                                <h3>Date Interval</h3>
                                 <label for="ex4">From:</label>
                                <input id="datetimepicker6" class="form-control" placeholder="03/06/2018 8:24 PM" type="text"> 
                              
                                
                                <label for="ex4">To:</label>
                                <input id="datetimepicker5" class="form-control" placeholder="03/06/2018 8:24 PM" type="text">
                </form>
                <div class="col-sm-12">
                      <div class="row">
                        <div class="col-sm-6">
                              <label>Matter:</label>
                   <select size="10" multiple="" class="form-control" name="SelectedProjects" style="width: 100%;">

                                            <option value="-1" selected="">All</option>

                                    <option value="422773">Alex Dracup &gt; ClientScore project</option>

                                    <option value="413701">Alex Dracup &gt; General Legal Matters</option>

                                    <option value="404204">Alex Dracup &gt; Severus Holdings work</option>

                                    <option value="445867">Alex Holland &gt; Termination of General Contractor</option>

                                    <option value="460271">Alice Kelly &gt; Quiet Title of 13894 Sagassum Ct</option>

                                    <option value="444317">Amir Bahreman &gt; La Jolla CC&amp;R short-term rental research</option>

                                    <option value="458562">Andrew Arter &gt; Escondido Residential Purchase</option>

                                    <option value="448223">Ann Edwards &gt; Eviction - Clairemont Mesa Condo</option>

                                    <option value="415796">Annette Borsack &gt; In re Marriage of Annette Borsack and William Borsack</option>

                                    <option value="415380">Anthony Pels &gt; Pels v. Sister - 1766 Promenade Cir</option>

                                    <option value="459216">Betty Hamilton &gt; Gift transfer of property to daughter</option>

                                    <option value="464400">Bill Brink &gt; Deposition of Christy Brink</option>

                                    <option value="418150">Bill Parkes, Chief Digital Advisors LLC &gt; Equity for Work - Hourly</option>

                                    <option value="423077">Bill Parkes, Chief Digital Advisors LLC &gt; Flat Rate Contract Drafting</option>

                                    <option value="418149">Bill Parkes, Chief Digital Advisors LLC &gt; Flat Rate Equity for Work Agreement</option>

                                    <option value="420291">Bill Parkes, Chief Digital Advisors LLC &gt; General Legal Matters</option>

                                    <option value="422045">Bill Parkes, Chief Digital Advisors LLC &gt; nFusion opinion letter - flat rate</option>

                                    <option value="448246">Blizzard Colin &gt; </option>

                                    <option value="410512">Blue Loyal &gt; PPDdatabase matter</option>

                                    <option value="403252">Brad Glaser &gt; Palming Off Matter</option>

                                    <option value="423323">Brandon Howard &gt; Mission Viejo Lease Dispute</option>

                                    <option value="392449">Brent Wood, Gordon Wood, Guinevere Wood &gt; Business Sale - Feb-Apr 2015 only</option>

                                    <option value="416201">Brent Wood, Gordon Wood, Guinevere Wood &gt; General Legal Matters (not for Shaw time)</option>

                                    <option value="405555">Brent Wood, Gordon Wood, Guinevere Wood &gt; GreenTree Litgation</option>

                                    <option value="465969">Brent Wood, Gordon Wood, Guinevere Wood &gt; Wood v. Shaw Arbitration</option>

                                    <option value="463349">Britzgo, Ltd. &gt; General Legal Matters</option>

                                    <option value="465975">Casebolt Law Corp., PC. &gt; Forrest v. Wilks - Collection</option>

                                    <option value="406090">Cathy Montie &gt; General Legal Matters</option>

                                    <option value="412290">Cathy Montie &gt; Robert Ruggeri v Cathy Montie</option>

                                    <option value="410547">CCI - Cosmopolitan Commercial Inc. - John Lee &gt; CCI v. Newkoa LLC et al</option>

                                    <option value="413397">CCI - Cosmopolitan Commercial Inc. - John Lee &gt; General Legal Matters</option>

                                    <option value="413398">CCI - Cosmopolitan Commercial Inc. - John Lee &gt; Temple Property Demand Letter</option>

                                    <option value="463937">Chris Ekholm / Tim Baker &gt; </option>

                                    <option value="461908">Daniel Devoe &gt; Devoe v. Heinemann</option>

                                    <option value="463350">Daniel Devoe &gt; Devoe v. Vizio</option>

                                    <option value="460545">Daniel Rodriguez &gt; Lake Elsinore property line matter</option>

                                    <option value="397996">Danny Cavic &gt; Cavic v. Forensic Accountant</option>

                                    <option value="406296">Danny Ho / ICD Construction &gt; Blue Mountain Breach of Contract matter</option>

                                    <option value="413326">Danny Ho / ICD Construction &gt; General Legal Matters</option>

                                    <option value="457532">David Wolff &gt; General Legal Work</option>

                                    <option value="413768">DBG Partners, Inc. &gt; General Legal Matters</option>

                                    <option value="412283">DBG Partners, Inc. &gt; Miller v DBG Partners</option>

                                    <option value="426385">Dennis Spence &gt; Easements for 859 Anns Way</option>

                                    <option value="411971">DKO International / Richard D Oh &gt; NMTech Korea Co., LTD. vs. DKO International, Inc.</option>

                                    <option value="420678">DP - RoboLaw &gt; Mechanics Lien Machine #ME</option>

                                    <option value="464390">DP Internal / Admin &gt; Accounting by Maricar</option>

                                    <option value="398353">DP Internal / Admin &gt; DPmarketing</option>

                                    <option value="445978">DP Internal / Admin &gt; Improve Firm Infrastructure</option>

                                    <option value="410204">DP Internal / Admin &gt; Work on Billing</option>

                                    <option value="410022">DP Internal / Admin &gt; Work re Potential New Client</option>

                                    <option value="463786">Dr. Edward Laurance &gt; General Legal Matters</option>

                                    <option value="462876">Dracup &amp; Patterson, ALC &gt; Medmark/Tony Rice/Justine Heist Collection</option>

                                    <option value="442891">Dracup &amp; Patterson, ALC &gt; Pro Bono work</option>

                                    <option value="405173">Dracup &amp; Patterson, ALC &gt; Veritext v. Dracup &amp; Patterson, ALC.</option>

                                    <option value="462239">Duke Fightmaster &gt; General Legal Matters</option>

                                    <option value="444990">Eddy Lane / John Plag &gt; Defamation by Andy</option>

                                    <option value="444159">Eddy Lane / John Plag &gt; Lane v. Tran and Hua</option>

                                    <option value="445144">Eddy Lane / John Plag &gt; TRO - Andy Hua v Eddy Lane</option>

                                    <option value="444629">Eddy Preciado &gt; Roofing dispute</option>

                                    <option value="459675">Foshan Vohom Technology Co., Ltd &gt; Vohom v. Labya Inc, et. al.</option>

                                    <option value="404040">Gene and Sarina Vinson &gt; Business valuation</option>

                                    <option value="414478">Gene Vinson &gt; General Legal Matters and Advice</option>

                                    <option value="420602">Gerald and Sima Moore &gt; Moore - Insurance Demands</option>

                                    <option value="420601">Gerald and Sima Moore &gt; Moore v. Neil, Dymott APLC (Robert Frank) File #421-4356</option>

                                    <option value="420605">Gerald and Sima Moore &gt; Whitfield v. Moore - Appeal Only</option>

                                    <option value="419823">Gerald and Sima Moore &gt; Whitfield v. Moore - Matters other than appeal</option>

                                    <option value="405269">Gordon Wood &gt; General Matters</option>

                                    <option value="417204">Grecita and Angeline Enriquez &gt; 431 Graves Ave</option>

                                    <option value="428083">Hope Howard &gt; 8653 West Olympic Blvd</option>

                                    <option value="445528">Hugo Wende &gt; Wende Corp. v Free ATM, LLC</option>

                                    <option value="461593">Jason Haycraft/Llywelyn &gt; </option>

                                    <option value="462617">Jason Haycraft/Llywelyn &gt; Sexual Harassment Matter</option>

                                    <option value="392468">Jason Longo &gt; General Legal Matters</option>

                                    <option value="427270">Jeff Dracup &gt; Dracup v. LVNN</option>

                                    <option value="416196">Jeff Dracup &gt; Hickman fee dispute</option>

                                    <option value="405195">Jeff Dracup &gt; P3 Marketing</option>

                                    <option value="394331">Jeff Dracup &gt; PDVchild</option>

                                    <option value="394330">Jeff Dracup &gt; PDVmedical</option>

                                    <option value="394332">Jeff Dracup &gt; PDVprop</option>

                                    <option value="438903">Jeff Dracup &gt; Seizure Patent</option>

                                    <option value="438902">Jeff Dracup &gt; Zongo Patent</option>

                                    <option value="447914">Jing Jaing &gt; Quiet Title Action</option>

                                    <option value="406058">John Dracup &gt; AquaMunda Water</option>

                                    <option value="461190">John Molea &gt; Oceanside Loan documents</option>

                                    <option value="419470">Jon Noceda / Express Pros &gt; 26267 Castle Ln - Perez Lease Termination</option>

                                    <option value="445661">Jon Noceda / Express Pros &gt; Express Pros v. ELD Logistics - Post settlement work</option>

                                    <option value="419483">Jon Noceda / Express Pros &gt; Perez Collection</option>

                                    <option value="422094">Jon Noceda, USN (Ret) &gt; $20,000 collection</option>

                                    <option value="422095">Jon Noceda, USN (Ret) &gt; Breach of Lease - Get Default</option>

                                    <option value="422093">Jon Noceda, USN (Ret) &gt; ELD Logistics Demand Letter</option>

                                    <option value="425554">Jon Noceda, USN (Ret) &gt; Express v. Miguel Zarate</option>

                                    <option value="425730">Jon Noceda, USN (Ret) &gt; General Legal Matters</option>

                                    <option value="422922">Jon Noceda, USN (Ret) &gt; Jon Noceda (ExpressPros) v ELD Logistics</option>

                                    <option value="424766">Jon Noceda, USN (Ret) &gt; Roamcare - Synergy Franchise Purchase</option>

                                    <option value="414760">Joyce Anson &gt; GRLC GreenLand Corp Collection</option>

                                    <option value="392450">Katherine Bryan, Kristie Griess, KB2 Consulting &gt; Willer Collection</option>

                                    <option value="403440">Kathleen Fannan &gt; General Legal Matters</option>

                                    <option value="421280">Kurt Pham &gt; Property Dispute</option>

                                    <option value="458886">Lonnie Hogan &gt; Goodwill Baptist Church v. Hogan</option>

                                    <option value="457534">Madeline Vasely &gt; Vasely v. Chiu</option>

                                    <option value="444257">Mario Serrano &gt; Lease Dispute - 7281 El Cajon Blvd</option>

                                    <option value="392448">Marisela Castaneda &gt; Burtech v. Garcia, et. al.</option>

                                    <option value="404768">Mark Frost &gt; General Legal Matters</option>

                                    <option value="414517">Mark Hagen / Margaret Willett &gt; Hagen v. Procopio / Cuba Beverage</option>

                                    <option value="414767">Mary Molloy &gt; Molloy Family Trust Dispute</option>

                                    <option value="393102">Mary Molloy &gt; Molloy v. SLS Mortgage</option>

                                    <option value="404227">Mattilie Wilson &gt; Ankle Injury</option>

                                    <option value="447981">Meagan Stevens &gt; Objection to Subpoena</option>

                                    <option value="404039">Medmark / Garrity Systems, Inc. &gt; General Legal Matters</option>

                                    <option value="420722">Medmark / Garrity Systems, Inc. &gt; Kraft v. Medmark</option>

                                    <option value="424203">Medmark / Garrity Systems, Inc. &gt; MedMark v Dr. Lin and St Charles</option>

                                    <option value="420723">Medmark / Garrity Systems, Inc. &gt; St. Charles v. Medmark</option>

                                    <option value="396483">Melissa Polly &gt; Vital Therapies</option>

                                    <option value="439044">MG Architects (Mort Goodarzi) &gt; MG Architects Inc. v Paseo, LLC</option>

                                    <option value="447330">Michael Artavia &gt; Auto Loan Contract</option>

                                    <option value="461586">Michael Cook/Miguel Gonzo/Black Car &gt; General Legal Matters</option>

                                    <option value="444258">Michael Stith &gt; Adverse Possession of LA property</option>

                                    <option value="409576">Monica Miller &gt; Partnership Dispute</option>

                                    <option value="465136">Muhammed Hasan Mirza (Course) &gt; Course Media LLC v. Hasan Mirza</option>

                                    <option value="415191">Natalie Dracup &gt; Natalie Dracup v RCOC  (PDV Medical Case)</option>

                                    <option value="405831">No Client &gt; </option>

                                    <option value="448339">One Taste / Eli Block &gt; Fill out Venice Business License</option>

                                    <option value="423461">Paige White &gt; Commission Split Arbitration</option>

                                    <option value="422771">Paige White &gt; Leads Contract</option>

                                    <option value="415274">Pavan Ravula &gt; Tidewater Systems, Inc. matter</option>

                                    <option value="423403">Philip Claessens &gt; Arnold v Claessens</option>

                                    <option value="428501">Platinum Asset Holdings LLC &gt; Aral - Viking Dispute</option>

                                    <option value="439073">Rachel Owenswalker &gt; Disability Claim</option>

                                    <option value="421433">Rachel Owenswalker &gt; Owenswalker v. Drug Company</option>

                                    <option value="417198">Rams International / Carmi Ramirez &gt; Living Cornerstone LLC Setup</option>

                                    <option value="417365">Rene Beltran &gt; General Legal Matters</option>

                                    <option value="460273">Richard Davis &gt; Dispute with prior broker</option>

                                    <option value="392469">Rick Imber &gt; App idea</option>

                                    <option value="459956">Rodney Sampson &gt; PNMR v. Sampson and G.L. Trust</option>

                                    <option value="404936">Roman Oyzerovich &gt; General Legal Matters</option>

                                    <option value="422687">Ryan Huttenmaier &gt; Draft residential remodel contract</option>

                                    <option value="401196">Ryan Huttenmaier &gt; Machado v. Quality Construction Solutions</option>

                                    <option value="419478">Sam Osadché &gt; Collection - Kuhn and JFK Enterprises</option>

                                    <option value="403894">Sean Dracup &gt; General Matters</option>

                                    <option value="439562">Seth Cohen &gt; Cohen v Provident Group (foreclosure)</option>

                                    <option value="394960">Single Cell Technology (SCT) &gt; Fund Raise - Mar 2015</option>

                                    <option value="412326">Sohil Patel / Lilley Planning Group, Inc &gt; General Legal Matters</option>

                                    <option value="396584">Soterria, Inc. &gt; Growing Company</option>

                                    <option value="446098">Steven Moran &gt; Zulu Services, Inc. v. Luis Steven Moran et. al.</option>

                                    <option value="447447">Steven R. Earley &gt; Escrow Loan issues</option>

                                    <option value="439195">Sycamore Entertainment, Inc. (Ed Sylvan) &gt; Plastic Nations (PNMR) v. Sampson / Sycamore</option>

                                    <option value="458135">Tavia Dautartas &gt; Midori matter</option>

                                    <option value="403395">Tempest Butler &gt; Contract revision for Clean My Home San Diego</option>

                                    <option value="403394">Tempest Butler &gt; General Legal Matters</option>

                                    <option value="394512">Test Client &gt; Test Project</option>

                                    <option value="420349">TheDogTor.net / Marshall Miller &gt; TheDogTor v. Emotional Pet Support</option>

                                    <option value="451727">Tho Ngoc Nguyen/Blue Collar Investment Group, Inc. &gt; Charlie H. Ngo v. Tho (Anthony) Ngoc Nguyen</option>

                                    <option value="403976">TimeLedger &gt; Marketing</option>

                                    <option value="403975">TimeLedger &gt; Product Design</option>

                                    <option value="409599">TimeLedger &gt; Sales</option>

                                    <option value="393104">TimeLedger &gt; Suggestions for Improvement</option>

                                    <option value="403974">TimeLedger &gt; Tech Support</option>

                                    <option value="462422">Tony Longo &gt; Future Fins, LLC dispute</option>

                                    <option value="444260">Tyler Weeda/Student Loan Advisory, LLC &gt; General Legal Matters</option>

                                    <option value="392745">USA Bus Charter &gt; Boy Scout Troop #497</option>

                                    <option value="392446">USA Bus Charter &gt; Customer Contract Review</option>

                                    <option value="397886">USA Bus Charter &gt; General Legal Matters</option>

                                    <option value="392447">USA Bus Charter &gt; Kate Albright-Hanna Charter</option>

                                    <option value="397523">USA Bus Charter &gt; Main Contract Redraft</option>

                                    <option value="402822">USA Bus Charter &gt; USA Bus Charter Rental</option>

                                    <option value="418387">Viman Aviation &gt; General Legal Matters</option>

                                    <option value="461027">Yoram Kahana / Joyce Vinje &gt; General Legal Matters</option>

                                    <option value="394959">Yoram Kahana / Joyce Vinje &gt; LA Property Assessment</option>

                                    <option value="425723">Yoram Kahana / Joyce Vinje &gt; Lookout Mountain</option>

                                    <option value="451088">Yoram Kahana / Joyce Vinje &gt; Paz loan documents</option>

                                        </select>
                            </div>
                        <div class="col-sm-6 " >
                              <label>Activities:</label>
                            <select  name="items" class="form-control" size="10" style="width: 100%;" ondblclick="">
                                       <option>All</option> 
                                  
                             </select>
                            </div>
                    <div class="col-sm-6" style="padding-top: 10px;">
                                      <label>Groups:</label>
                                    <select style="width: 100%;" size="10" multiple="" class="form-control" >

                        <option value="-1" selected="">All</option>

                        <option value="">Test</option>
                        <option value="">None</option>
                      </select>
                    </div>
                    <div class="col-sm-6" style="padding-top: 10px;">
                              <label>Users:</label>
                    <select name="items" size="10" class="form-control" style="width: 100%;" ondblclick="">
                                
                                  <option value="0">Double-click on the User you want to edit:</option>
                                  <option value=" 48226">Bell, Terry</option>
                                  <option value=" 50385">Burgraff, Kimberly</option>
                                  <option value=" 48227">Clarambeau, Adlore</option>
                                  <option value=" 50138">Diaz, Denise L</option>
                                  <option value=" 49076">Dracup, Alex</option>
                                  <option value=" 49807">Dracup, Brittany</option>
                                  <option value=" 48087">Dracup, Jeffrey</option>
                                  <option value=" 50128">Jenkins, Michelle A</option>
                                  <option value=" 50126">Kiamilev, Chandra E</option>
                                  <option value=" 50155">Larmore, Thomas A</option>
                                  <option value=" 50428">McQueen, Andrea A</option>
                                  <option value=" 50125">Payne, Richard</option>
                              </select>
                            </div>
                 </div>
                       </div>

                 </div>
                 <div class="text-center">
                 <button class="btn btn-primary btn-lg">Display Report</button>
               </div>
               </div>
                 </div>
                  </div>
                </div>
              </div>
        <!-- /page content -->

            <!-- footer content -->
         <?php
        include_once "footer.php";
        ?>

        <!-- /footer content -->
      </div>
    </div>

   
   <!-- Custom Theme Scripts -->
    <?php
    include_once "script.php";
    ?>

   <?php
    include_once "modal.php";
    ?>
  

  </body>
</html>
