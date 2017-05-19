<?php
require_once('../source/config/connection.php');
session_start();
if(!isset($_SESSION["LOGIN_USR"])){

    header("location:../login");
 }

//$sql ="select * from tbl_pc ";


$tbl_start_tag = '<table class="responsive-table table table-hover" id="maintbl style="width:auto; height:auto;"">
        <thead>
          <tr>
            <th>PC No​</th>
            <th>PC Name</th>
            <th>Model</th>
            <th>IP </th>
            <th>S.Tag</th>
            <th>OS Ver</th>
            <th>Offic.Ver</th>
            <th>Offic.Ver</th>
             <th>Offic.Ver</th>
              <th>Offic.Ver</th>
               <th>Offic.Ver</th>
                <th>Offic.Ver</th>
                 <th>Offic.Ver</th>
                  <th>Offic.Ver</th>
         

          </tr>
        </thead>
        <tbody>

        ';

/*   <th>Antivirus</th>
            <th>Mac.Add</th>
            <th>RAM</th>
            <th>HDD</th>
            <th>CPU</th>
            <th>Purchase Date</th>
            <th>Price</th>
            <th>Dep</th>
            <th>Branch</th>
            <th>User</th>
            <th>Status</th>*/
$tbl_close_tag = "</tbody></table>";

$tbl_data = "     
		 <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
          </tr>
          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
          </tr>
          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
          </tr>

          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
          </tr>
          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
          </tr>
          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
          </tr>
          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
          </tr>
          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
          </tr>
          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
          </tr>
          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
          </tr>
          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
          </tr>
          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
          </tr>
          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
          </tr>
          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
          </tr>
          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
          </tr>
          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
          </tr>
          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
          </tr>
          <tr>
            <td>Jackson</td>
            <td>94</td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
            <td>Lorem </td>
          </tr>

         "; 

print($tbl_start_tag.$tbl_data.$tbl_close_tag);
//  print($test_tbl);

 

 ?>


