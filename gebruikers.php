<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
  <?php include ("nav_header.php"); ?>
      <!-- Sidebar Navigation end-->
  <div class="page-content">
      <!-- Page Header-->
      <div class="page-header no-margin-bottom">
          <div class="container-fluid">
              <h2 class="h5 no-margin-bottom">Tables</h2>
          </div>
      </div>
      <!-- Breadcrumb-->
      <div class="container-fluid">
          <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Tables        </li>
          </ul>
      </div>
      <section class="no-padding-top">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-6">
                      <div class="block margin-bottom-sm">
                          <div class="title"><strong>Basic Table</strong></div>
                          <div class="table-responsive">
                              <h3><a target="_blank" href="https://www.gyrocode.com/articles/jquery-datatables-how-to-expand-collapse-all-child-rows/">jQuery DataTables: How to expand/collapse all child rows</a> <small>Responsive extension</small></h3>

                              <button id="btn-show-all-children" type="button">Expand All</button>
                              <button id="btn-hide-all-children" type="button">Collapse All</button>
                              <hr>
                              <table id="example" class="display" cellspacing="0" width="100%">
                                  <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>Position</th>
                                      <th>Office</th>
                                      <th class="none">Age</th>
                                      <th class="none">Start date</th>
                                      <th class="none">Salary</th>
                                  </tr>
                                  </thead>
                                  <tfoot>
                                  <tr>
                                      <th>Name</th>
                                      <th>Position</th>
                                      <th>Office</th>
                                      <th>Age</th>
                                      <th>Start date</th>
                                      <th>Salary</th>
                                  </tr>
                                  </tfoot>
                                  <tbody>
                                  <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>$320,800</td>
                                  </tr>
                                  <tr>
                                      <td>Garrett Winters</td>
                                      <td>Accountant</td>
                                      <td>Tokyo</td>
                                      <td>63</td>
                                      <td>2011/07/25</td>
                                      <td>$170,750</td>
                                  </tr>
                                  <tr>
                                      <td>Ashton Cox</td>
                                      <td>Junior Technical Author</td>
                                      <td>San Francisco</td>
                                      <td>66</td>
                                      <td>2009/01/12</td>
                                      <td>$86,000</td>
                                  </tr>
                                  <tr>
                                      <td>Bradley Greer</td>
                                      <td>Software Engineer</td>
                                      <td>London</td>
                                      <td>41</td>
                                      <td>2012/10/13</td>
                                      <td>$132,000</td>
                                  </tr>
                                  <tr>
                                      <td>Dai Rios</td>
                                      <td>Personnel Lead</td>
                                      <td>Edinburgh</td>
                                      <td>35</td>
                                      <td>2012/09/26</td>
                                      <td>$217,500</td>
                                  </tr>
                                  <tr>
                                      <td>Jenette Caldwell</td>
                                      <td>Development Lead</td>
                                      <td>New York</td>
                                      <td>30</td>
                                      <td>2011/09/03</td>
                                      <td>$345,000</td>
                                  </tr>
                                  <tr>
                                      <td>Yuri Berry</td>
                                      <td>Chief Marketing Officer (CMO)</td>
                                      <td>New York</td>
                                      <td>40</td>
                                      <td>2009/06/25</td>
                                      <td>$675,000</td>
                                  </tr>
                                  <tr>
                                      <td>Caesar Vance</td>
                                      <td>Pre-Sales Support</td>
                                      <td>New York</td>
                                      <td>21</td>
                                      <td>2011/12/12</td>
                                      <td>$106,450</td>
                                  </tr>
                                  <tr>
                                      <td>Doris Wilder</td>
                                      <td>Sales Assistant</td>
                                      <td>Sidney</td>
                                      <td>23</td>
                                      <td>2010/09/20</td>
                                      <td>$85,600</td>
                                  </tr>
                                  <tr>
                                      <td>Angelica Ramos</td>
                                      <td>Chief Executive Officer (CEO)</td>
                                      <td>London</td>
                                      <td>47</td>
                                      <td>2009/10/09</td>
                                      <td>$1,200,000</td>
                                  </tr>
                                  <tr>
                                      <td>Gavin Joyce</td>
                                      <td>Developer</td>
                                      <td>Edinburgh</td>
                                      <td>42</td>
                                      <td>2010/12/22</td>
                                      <td>$92,575</td>
                                  </tr>
                                  <tr>
                                      <td>Jennifer Chang</td>
                                      <td>Regional Director</td>
                                      <td>Singapore</td>
                                      <td>28</td>
                                      <td>2010/11/14</td>
                                      <td>$357,650</td>
                                  </tr>
                                  <tr>
                                      <td>Brenden Wagner</td>
                                      <td>Software Engineer</td>
                                      <td>San Francisco</td>
                                      <td>28</td>
                                      <td>2011/06/07</td>
                                      <td>$206,850</td>
                                  </tr>
                                  <tr>
                                      <td>Fiona Green</td>
                                      <td>Chief Operating Officer (COO)</td>
                                      <td>San Francisco</td>
                                      <td>48</td>
                                      <td>2010/03/11</td>
                                      <td>$850,000</td>
                                  </tr>
                                  <tr>
                                      <td>Shou Itou</td>
                                      <td>Regional Marketing</td>
                                      <td>Tokyo</td>
                                      <td>20</td>
                                      <td>2011/08/14</td>
                                      <td>$163,000</td>
                                  </tr>
                                  <tr>
                                      <td>Michelle House</td>
                                      <td>Integration Specialist</td>
                                      <td>Sidney</td>
                                      <td>37</td>
                                      <td>2011/06/02</td>
                                      <td>$95,400</td>
                                  </tr>
                                  <tr>
                                      <td>Suki Burks</td>
                                      <td>Developer</td>
                                      <td>London</td>
                                      <td>53</td>
                                      <td>2009/10/22</td>
                                      <td>$114,500</td>
                                  </tr>
                                  <tr>
                                      <td>Prescott Bartlett</td>
                                      <td>Technical Author</td>
                                      <td>London</td>
                                      <td>27</td>
                                      <td>2011/05/07</td>
                                      <td>$145,000</td>
                                  </tr>
                                  <tr>
                                      <td>Gavin Cortez</td>
                                      <td>Team Leader</td>
                                      <td>San Francisco</td>
                                      <td>22</td>
                                      <td>2008/10/26</td>
                                      <td>$235,500</td>
                                  </tr>
                                  <tr>
                                      <td>Martena Mccray</td>
                                      <td>Post-Sales support</td>
                                      <td>Edinburgh</td>
                                      <td>46</td>
                                      <td>2011/03/09</td>
                                      <td>$324,050</td>
                                  </tr>
                                  <tr>
                                      <td>Unity Butler</td>
                                      <td>Marketing Designer</td>
                                      <td>San Francisco</td>
                                      <td>47</td>
                                      <td>2009/12/09</td>
                                      <td>$85,675</td>
                                  </tr>
                                  <tr>
                                      <td>Howard Hatfield</td>
                                      <td>Office Manager</td>
                                      <td>San Francisco</td>
                                      <td>51</td>
                                      <td>2008/12/16</td>
                                      <td>$164,500</td>
                                  </tr>
                                  <tr>
                                      <td>Hope Fuentes</td>
                                      <td>Secretary</td>
                                      <td>San Francisco</td>
                                      <td>41</td>
                                      <td>2010/02/12</td>
                                      <td>$109,850</td>
                                  </tr>
                                  <tr>
                                      <td>Vivian Harrell</td>
                                      <td>Financial Controller</td>
                                      <td>San Francisco</td>
                                      <td>62</td>
                                      <td>2009/02/14</td>
                                      <td>$452,500</td>
                                  </tr>
                                  <tr>
                                      <td>Timothy Mooney</td>
                                      <td>Office Manager</td>
                                      <td>London</td>
                                      <td>37</td>
                                      <td>2008/12/11</td>
                                      <td>$136,200</td>
                                  </tr>
                                  <tr>
                                      <td>Jackson Bradshaw</td>
                                      <td>Director</td>
                                      <td>New York</td>
                                      <td>65</td>
                                      <td>2008/09/26</td>
                                      <td>$645,750</td>
                                  </tr>
                                  <tr>
                                      <td>Olivia Liang</td>
                                      <td>Support Engineer</td>
                                      <td>Singapore</td>
                                      <td>64</td>
                                      <td>2011/02/03</td>
                                      <td>$234,500</td>
                                  </tr>
                                  <tr>
                                      <td>Bruno Nash</td>
                                      <td>Software Engineer</td>
                                      <td>London</td>
                                      <td>38</td>
                                      <td>2011/05/03</td>
                                      <td>$163,500</td>
                                  </tr>
                                  <tr>
                                      <td>Sakura Yamamoto</td>
                                      <td>Support Engineer</td>
                                      <td>Tokyo</td>
                                      <td>37</td>
                                      <td>2009/08/19</td>
                                      <td>$139,575</td>
                                  </tr>
                                  <tr>
                                      <td>Thor Walton</td>
                                      <td>Developer</td>
                                      <td>New York</td>
                                      <td>61</td>
                                      <td>2013/08/11</td>
                                      <td>$98,540</td>
                                  </tr>
                                  <tr>
                                      <td>Finn Camacho</td>
                                      <td>Support Engineer</td>
                                      <td>San Francisco</td>
                                      <td>47</td>
                                      <td>2009/07/07</td>
                                      <td>$87,500</td>
                                  </tr>
                                  <tr>
                                      <td>Serge Baldwin</td>
                                      <td>Data Coordinator</td>
                                      <td>Singapore</td>
                                      <td>64</td>
                                      <td>2012/04/09</td>
                                      <td>$138,575</td>
                                  </tr>
                                  <tr>
                                      <td>Zenaida Frank</td>
                                      <td>Software Engineer</td>
                                      <td>New York</td>
                                      <td>63</td>
                                      <td>2010/01/04</td>
                                      <td>$125,250</td>
                                  </tr>
                                  <tr>
                                      <td>Zorita Serrano</td>
                                      <td>Software Engineer</td>
                                      <td>San Francisco</td>
                                      <td>56</td>
                                      <td>2012/06/01</td>
                                      <td>$115,000</td>
                                  </tr>
                                  <tr>
                                      <td>Jennifer Acosta</td>
                                      <td>Junior Javascript Developer</td>
                                      <td>Edinburgh</td>
                                      <td>43</td>
                                      <td>2013/02/01</td>
                                      <td>$75,650</td>
                                  </tr>
                                  <tr>
                                      <td>Cara Stevens</td>
                                      <td>Sales Assistant</td>
                                      <td>New York</td>
                                      <td>46</td>
                                      <td>2011/12/06</td>
                                      <td>$145,600</td>
                                  </tr>
                                  <tr>
                                      <td>Hermione Butler</td>
                                      <td>Regional Director</td>
                                      <td>London</td>
                                      <td>47</td>
                                      <td>2011/03/21</td>
                                      <td>$356,250</td>
                                  </tr>
                                  <tr>
                                      <td>Lael Greer</td>
                                      <td>Systems Administrator</td>
                                      <td>London</td>
                                      <td>21</td>
                                      <td>2009/02/27</td>
                                      <td>$103,500</td>
                                  </tr>
                                  <tr>
                                      <td>Jonas Alexander</td>
                                      <td>Developer</td>
                                      <td>San Francisco</td>
                                      <td>30</td>
                                      <td>2010/07/14</td>
                                      <td>$86,500</td>
                                  </tr>
                                  <tr>
                                      <td>Shad Decker</td>
                                      <td>Regional Director</td>
                                      <td>Edinburgh</td>
                                      <td>51</td>
                                      <td>2008/11/13</td>
                                      <td>$183,000</td>
                                  </tr>
                                  <tr>
                                      <td>Michael Bruce</td>
                                      <td>Javascript Developer</td>
                                      <td>Singapore</td>
                                      <td>29</td>
                                      <td>2011/06/27</td>
                                      <td>$183,000</td>
                                  </tr>
                                  <tr>
                                      <td>Donna Snider</td>
                                      <td>Customer Support</td>
                                      <td>New York</td>
                                      <td>27</td>
                                      <td>2011/01/25</td>
                                      <td>$112,000</td>
                                  </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>



              </div>
          </div>
      </section>
      <footer class="footer">
          <div class="footer__block block no-margin-bottom">
              <div class="container-fluid text-center">
                  <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                  <p class="no-margin-bottom">2020 &copy; Your company. Design by <a href="https://bootstrapious.com/p/bootstrap-4-dark-admin">Bootstrapious</a>.</p>
              </div>
          </div>
      </footer>
  </div>
  </div>
  <!-- JavaScript files-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper.js/umd/popper.min.js"> </script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
  <script src="js/front.js"></script>

  <script>
      $(document).ready(function (){
          var table = $('#example').DataTable({
              'responsive': true
          });

          // Handle click on "Expand All" button
          $('#btn-show-all-children').on('click', function(){
              // Expand row details
              table.rows(':not(.parent)').nodes().to$().find('td:first-child').trigger('click');
          });

          // Handle click on "Collapse All" button
          $('#btn-hide-all-children').on('click', function(){
              // Collapse row details
              table.rows('.parent').nodes().to$().find('td:first-child').trigger('click');
          });
      });
  </script>
  </body>
</html>