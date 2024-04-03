<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>Incio</h5><span>Resuemn del DIa</span>
          </div>
          <div class="card-body">
            <p>"AQui vendra datos de cagancias e informes en wiggews"</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid basic_table">
    <div class="row">

      <div class="col-sm-12">
        <div class="card">
           <div class="card-header">
            <h3>Hoverable Rows With Horizontal Border</h3><span>Hoverable row use a class <code>table-hover</code> and for Horizontal border use a class <code>.table-border-horizontal</code> , Solid border Use a class<code>.border-solid .table</code>class.</span>
          </div>
          <div class="table-responsive signal-table">
            <table class="table table-hover" id="tables">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Status</th>
                  <th scope="col">Signal Name </th>
                  <th scope="col">Security</th>
                  <th scope="col">Stage</th>
                  <th scope="col">Schedule</th>
                  <th scope="col">Team Lead</th>
                  <th scope="col">Accion</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td class="d-flex align-items-center"><i class="bg-light-success font-success" data-feather="alert-triangle"></i><span class="font-success">No Signal</span></td>
                  <td>Astrid: NE Shared managed</td>
                  <td>Medium</td>
                  <td>Triaged</td>
                  <td>0.33 </td>
                  <td>Chase Nguyen </td>
                  <td>
                    <ul class="action">
                      <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                      <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td class="d-flex align-items-center"><i class="bg-light-danger font-danger" data-feather="alert-triangle"></i><span class="font-danger">Offline</span></td>
                  <td>Cosmo: prod shared ares </td>
                  <td>Huge</td>
                  <td>Triaged</td>
                  <td>0.39</td>
                  <td>Brie Furman</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td class="d-flex align-items-center"> <i class="bg-light-primary font-primary" data-feather="alert-circle"></i><span class="font-primary">Online</span></td>
                  <td>Phoenix: prod shared lyra-lists </td>
                  <td>Minor</td>
                  <td>No Triaged</td>
                  <td>3.12 </td>
                  <td>Jeremy Lake</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td class="d-flex align-items-center"> <i class="bg-light-success font-success" data-feather="check-circle"></i><span class="font-success">No Signal</span></td>
                  <td>Astrid: NE Shared managed</td>
                  <td>Negligible</td>
                  <td>Triaged</td>
                  <td>13.18</td>
                  <td>Angelica Howards</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td class="d-flex align-items-center"> <i class="bg-light-danger font-danger" data-feather="check-circle"></i><span class="font-danger">Online</span></td>
                  <td>Astrid: NE Shared managed</td>
                  <td>Medium</td>
                  <td>No Triaged</td>
                  <td>5.33 </td>
                  <td>Diane Okuma</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      
      <!--
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0 card-no-border">
            <h3 class="mb-3">Immediately Show Hidden Details</h3><span>Responsive has the ability to display the details that it has hidden in a variety of different ways. Its default is to allow the end user to toggle the the display by clicking on a row and showing the information in a DataTables child row. At times it can be useful not to require end user interaction to display the hidden data in a responsive manner, which can be done with the childRowImd-flexte display type.</span>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive">
              <table class="display tables" id="show-hidden-row">
                <thead>
                  <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    <th>Extn.</th>
                    <th>E-mail</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger</td>
                    <td>Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>5421</td>
                    <td>t.nixon@datatables.net</td>
                    <td>
                      <ul class="action">
                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <td>Garrett</td>
                    <td>Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                    <td>8422</td>
                    <td>g.winters@datatables.net</td>
                    <td>
                      <ul class="action">
                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                      </ul>
                    </td>
                  </tr>
      
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
-->
    </div>
  </div>


</div>
<!-- Container-fluid Ends-->
</div>
</div>

<script src="<?php echo $path ?>views/assets/js/automotivosCris/tables/tables.js"></script>