<?php include("./header.php")?>

<div class="container pt-3 pb-3">
  <h2>Student's Leave List (unapprove only)</h2>           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Major</th>
        <th>Details</th>
        <th class="text-center">Manage</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>SCISO</td>
        <td><button type="button" class="btn btn-info">Info</button></td>
        <td>
            <button type="button" class="btn btn-success">Approve</button>
            | <button type="button" class="btn btn-warning">Denied</button>
        </td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>SCISO</td>
        <td><button type="button" class="btn btn-info">Info</button></td>
        <td>
            <button type="button" class="btn btn-success">Approve</button>
            | <button type="button" class="btn btn-warning">Denied</button>
        </td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>SCISO</td>
        <td><button type="button" class="btn btn-info">Info</button></td>
        <td>
            <button type="button" class="btn btn-success">Approve</button>
            | <button type="button" class="btn btn-warning">Denied</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<?php include("./footer.php")?>