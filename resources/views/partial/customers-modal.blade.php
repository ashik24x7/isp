<!-- Modal -->
<div class="modal fade" id="myModal{{$customer->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Complain View</h4>
      </div>
      <div class="modal-body">
          <div class="table-responsive table-commerce">
            <table id="basic-datatables" class="table table-bordered">
            <tbody>
                <?php $sl = 1; ?>
                <?php $i = 1; ?>
                <tr>
                    <td style="width: 150px; text-align: right;">IP:</td>
                    <td style="text-align: left;">{{ !empty($customer->customer->ip) ? $customer->customer->ip : "" }}</td>
                </tr>
                <tr>
                    <td style="width: 150px; text-align: right;">Name:</td>
                    <td style="text-align: left;">{{ !empty($customer->customer->username) ? $customer->customer->username : "" }}</td>
                </tr>
                <tr>
                    <td style="width: 150px; text-align: right;">Contact No:</td>
                    <td style="text-align: left;">{{ !empty($customer->customer->contact_no) ? $customer->customer->contact_no : "" }}</td>
                </tr>
                <tr>
                    <td style="width: 150px; text-align: right;">Additional Contact No:</td>
                    <td style="text-align: left;">{{ !empty($customer->customer->additional_contact_no) ? $customer->customer->additional_contact_no : "" }}</td>
                </tr>
                <tr>
                    <td style="width: 150px; text-align: right;">Email:</td>
                    <td style="text-align: left;">{{ !empty($customer->customer->email) ? $customer->customer->email : "" }}</td>
                </tr>
                <tr>
                    <td style="width: 150px; text-align: right;">House:</td>
                    <td style="text-align: left;">{{ !empty($customer->customer->house) ? $customer->customer->house : "" }}</td>
                </tr>
                <tr>
                    <td style="width: 150px; text-align: right;">Road:</td>
                    <td style="text-align: left;">{{ !empty($customer->customer->road) ? $customer->customer->road : "" }}</td>
                </tr>
                <tr>
                    <td style="width: 150px; text-align: right;">Block:</td>
                    <td style="text-align: left;">{{ !empty($customer->customer->block) ? $customer->customer->block : "" }}</td>
                </tr>
                <tr>
                    <td style="width: 150px; text-align: right;">Address:</td>
                    <td style="text-align: left;">{{ !empty($customer->customer->address) ? $customer->customer->address : "" }}</td>
                </tr>
                <tr>
                    <td style="width: 150px; text-align: right;">Floor:</td>
                    <td style="text-align: left;">{{ !empty($customer->customer->floor) ? $customer->customer->floor : "" }}</td>
                </tr>
                <tr>
                    <td style="width: 150px; text-align: right;">Bill:</td>
                    <td style="text-align: left;">{{ !empty($customer->customer->bill) ? $customer->customer->bill : "" }}</td>
                </tr>
                <tr>
                    <td style="width: 150px; text-align: right;">Connection Up:</td>
                    <td style="text-align: left;">{{ !empty($customer->customer->connection_up) ? $customer->customer->connection_up : "" }}</td>
                </tr>
                <tr>
                    <td style="width: 150px; text-align: right;">Connection Establishment Info:</td>
                    <td style="text-align: left;">{{ !empty($customer->customer->connection_establishment_info) ? $customer->customer->connection_establishment_info : "" }}</td>
                </tr>
                <tr>
                    <td style="width: 150px; text-align: right;">Connected From:</td>
                    <td style="text-align: left;">{{ !empty($customer->customer->connected_from) ? $customer->customer->connected_from : "" }}</td>
                </tr>
                <tr>
                    <td style="width: 150px; text-align: right;">Note:</td>
                    <td style="text-align: left;">{{ !empty($customer->customer->note) ? $customer->customer->note : "" }}</td>
                </tr>
                @if(!empty($customer->customer->customer_photo))
                <tr>
                    <td style="width: 150px; text-align: right;">Customer Photo:</td>
                    <td style="text-align: left;"><img src="{{ url('photo/customer-photo/'.$customer->customer->customer_photo) }}" style="width: 200px" alt=""></td>
                </tr>
                @endif
                @if(!empty($customer->customer->id_or_passport))
                <tr>
                    <td style="width: 150px; text-align: right;">ID/Passport:</td>
                    <td style="text-align: left;"><img src="{{ url('photo/id/'.$customer->customer->id_or_passport) }}" style="width: 200px" alt=""></td>
                </tr>
                @endif
                @if(!empty($customer->customer->updated_at))
                 <tr>
                    <td style="width: 150px; text-align: right;">Support At:</td>
                    <td style="text-align: left;">{{ date("d-m-Y h:i A", strtotime($customer->customer->updated_at)) }}</td>
                  </tr>
                @endif
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
