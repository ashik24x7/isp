<!-- Modal -->
<div class="modal fade" id="myModal{{$complain->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                    <td style="width: 150px; text-align: right;">Complain ID:</td>
                    <td style="text-align: left;">{{ $complain->id }}</td>
                  </tr>
                  <tr>
                    <td style="width: 150px; text-align: right;">User ID:</td>
                    <td style="text-align: left;">{{ $complain->user_id }}</td>
                  </tr>
                  <tr>
                    <td style="width: 150px; text-align: right;">Complain At:</td>
                    <td style="text-align: left;">{{ date("d-m-Y h:i A", strtotime($complain->created_at)) }}</td>
                  </tr>
                  <tr>
                    <td style="width: 150px; text-align: right;">Contact No: </td>
                    <td style="text-align: left;">{{ $complain->contact_no }}</td>
                  </tr>
                  <tr>
                    <td style="width: 150px; text-align: right;">Connected From: </td>
                    <td style="text-align: left;">{{ $complain->connected_from }}</td>
                  </tr>
                  <?php $texts = unserialize($complain->complain); $num = 1; ?>
                  <tr>
                    <td style="width: 150px; text-align: right;">Complain Category: </td>
                    <td style="text-align: left;">
                      <p id="category">{{$texts['category']}}</p>

                    </td>
                  </tr>
                  <tr>
                    <td style="width: 150px; text-align: right;">Complain</td>
                    <td style="text-align: left;">
                      <p id="complain">{{$texts['body']}}</p>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 150px; text-align: right;">Received By:</td>
                    <td style="text-align: left;">{{ $complain->received->username }}</td>
                  </tr>
                  <tr>
                    <td style="width: 150px; text-align: right;">Support Given By:</td>
                    <td style="text-align: left;"><p id="support">{{ $complain->support_given_by }}</p></td>
                  </tr>
                  <tr>
                    <td style="width: 150px; text-align: right;">Solved By:</td>
                    @if(!empty($complain->solved->username))
                    <td style="text-align: left;">{{ $complain->solved->username }}</td>
                    @endif
                  </tr>
                  <tr>
                    <td style="width: 150px; text-align: right;">Support At:</td>
                    <td style="text-align: left;">{{ date("d-m-Y h:i A", strtotime($complain->updated_at)) }}</td>
                  </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="/solved/{{$complain->id}}"><button type="button" class="btn btn-success
          @if(!empty($complain->solved_by))
          disabled
          @endif
        ">Solved</button></a>
      </div>
    </div>
  </div>
</div>
