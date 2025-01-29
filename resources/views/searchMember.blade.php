<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <title>Search checkin</title>
    <style>
        body {
            background-image: url('{{ asset('/image') }}');
            /* background-image: url('{{ asset('image/re.png') }}'); */
            background-size: auto;
            background-position: center center;
            background-attachment: fixed;
            height: 100vh;
        }

        .form-group {
            display: contents;
            justify-content: baseline;
            margin-bottom: 10px;
        }

        .form-group label {
            width: 120px;
            text-align: center;
        }

        .form-group input {

            width: fit-content;
            padding: 10px;

        }
    </style>
</head>

<body>
    <form action="/checkinpost" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {{-- <div class="form-group my-2 col-md-4 "style="font-family:initial "> --}}
        <div class="card my-3 mb-3 container " style="top: 50px; max-width: 50%; padding: 20px;">
            <h5 class="card-header " style="font-family:initial  ">Check Member</h5>

            <div class="form-group d-flex align-items-center my-2">
                <label for="staff_code">Member Id</label>
                <input type="text" placeholder="memberId" name="MemberID" id="MemberID" style="width: 65%">
            </div>
            <div class="form-group d-flex align-items-center my-2">
                <label for="MemName_T">FirstName</label>
                <input type="text" placeholder="firstname" id="MemName_T" name="MemName_T" style="margin-right: 10px;"
                    readonly>
                <label for="MemLastName_T">LastName</label>
                <input type="text" placeholder="lastname" id="MemLastName_T" name="MemLastName_T" style="align-items: end"
                    readonly>
            </div>
            {{-- <div class="form-group d-flex align-items-center my-2">
                <label for="lname">LastName</label>
                <input type="text" placeholder="lastname" id="lname" name="lname" style="align-items: end">
            </div> --}}
            <div class="form-group d-flex align-items-center my-2">
                <label for="room">Room No.</label>
                <input type="text" placeholder="roomnumber" name="room" id="room">
            </div>
            <br>
            @if (session('result'))
                <div >
                    <p>{{ session('result') }}</p>
                </div>
            @endif
            <br><input type="submit" value="save" class="btn btn-primary" style="width: 200px;">
        </div>
    </form>

</body>





</html>
