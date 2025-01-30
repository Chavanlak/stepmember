<html>
    <head>
        <title>Member check</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ppp</th>
                    <th>MemName_T</th>
                    <th>MemLastName_T</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach($members as $mem)
                    <tr>
                        <td>{{$mem->MemberID}}</td>
                        <td>{{$mem->MemName_T}}</td>
                        <td>{{$mem->MemLastName_T}}</td>
                     
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>

</html>
