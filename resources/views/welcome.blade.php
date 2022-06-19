
<form action="{{ route('addlist') }}" method="post">
    @csrf

    <input type="text" class="form-control" name="email">
    <input type="text" class="form-control" name="content">

    <input type="submit" value="เพิ่ม" class="btn btn-success " style="margin-left: 5%">



</form>
