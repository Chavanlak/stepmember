<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <title>Search Page</title>
    <style>
        /* Add shadow and padding for a better look */
        .card {
            padding: 30px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
    </style>
</head>

<body class="bg-light d-flex justify-content-center align-items-start min-vh-100 pt-5">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card border mb-3  mt-5">
                    <form >
                        <div class="mb-3">
                            <div style="color: rgb(82, 82, 82); font-size: 24px; font-weight: bold; font-family: 'Inter', sans-serif;">
                                <p>CHECK MEMBER</p>
                            </div>

                            <div class="d-flex">
                                <input type="text" class="form-control me-2" id="MemberID"
                                    placeholder="กรอกรหัสสมาชิก">
                              
                                <a href="/testMemberInput" class="btn btn-secondary">
                                  <i class="fas fa-search" style="font-size: 10px;"></i>
                              </a>
                              </div>
                            <div id="MemberIDHelp" class="form-text">กรุณากรอกรหัสสมาชิกให้ครบถ้วนเเละถูกต้อง</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('searchButton').addEventListener('click', function() {
            const memberID = document.getElementById('MemberID').value;
            if (memberID) {
                console.log('Member ID:', memberID);
                // You can send this to the backend or use it in any other way
            } else {
                alert('Please enter a Member ID');
            }
        });
    </script>
</body>

</html>
