@extends('layout.main')

@section('title', 'Friend')

@section('content')
    <main>
        <style>
table { 
border-collapse: collapse; 
} 
table, th, td { 
border: 1px solid black; 
text-align: center; 
}
        </style>
        <table>
            <caption> My best Friend</caption>
            <colgroup>
                    <col style="width: 10ch; background-color: red;"/>
                    <col style="width: 10ch;"/>
                    <col style="width: 10ch;"/>
            </colgroup>
            <thead>
                <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Student ID</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Thanapoom</td>
                    <td>Pekthanoo</td>
                    <td>632110155</td>
                </tr>
                <tr>
                    <td>Kongpop</td>
                    <td>Laowang</td>
                    <td>632110117</td>
                </tr>
                <tr>
                    <td>nut</td>
                    <td>nut</td>
                    <td>nut</td>
                </tr>

            </tbody>
        
        </table>
    </main>
@endsection
