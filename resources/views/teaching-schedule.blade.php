@extends('layout.main')

@section('title', 'Teaching-Schedule')

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
        <caption>Teaching Schedule</caption>
                <colgroup>
                        <col style="width: 2ch;"/>
                        <col style="width: 15ch;"/>
                        <col style="width: 15ch;"/>
                        <col style="width: 15ch;"/>
                        <col style="width: 15ch;"/>
                        <col style="width: 15ch;"/>
                        <col style="width: 15ch;"/>
                        <col style="width: 15ch;"/>
                        <col style="width: 15ch;"/>
                        <col style="width: 15ch;"/>
                        <col style="width: 15ch;"/>
                </colgroup>
        <thead>
                <tr>
                    <th></th>
                    <th>08:00 - 09:00</th>
                    <th>09:00 - 10:00</th>
                    <th>10:00 - 11:00</th>
                    <th>11:00 - 12:00</th>
                    <th>12:00 - 13:00</th>
                    <th>13:00 - 14:00</th>
                    <th>14:00 - 15:00</th>
                    <th>15:00 - 16:00</th>
                    <th>16:00 - 17:00</th>
                    <th>17:00 - 18:00</th>
                </tr>
                <tr>
                <td>Mo</td>
                    <td></td>
                    <td colspan = "2">FI TRACKING IN DIG BUS
                                            954230 (001-000)
                                            Room: CAMT113
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan = "1">HCM DIG BUS 
                                    954231 (001-000)
                                    Room: CAMT114
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>Tu</td>
                    <td  colspan = "4" align = 'center'>WEB PROGRAMMING
                                                        954240 (001-000)
                                                        Room: ILC-C208
                    </td>
                    <td></td>
                    <td colspan = "1">CRIT READ AND EFFEC WRITE
                                                001201 (120-000)
                                                    Room: RB5405
                    </td>
                    <td></td>
                    <td></td>   
                    <td></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>We</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>Th</td>
                    <td></td>
                    <td colspan = "2">FI TRACKING IN DIG BUS
                    954230 (001-000)
                    Room: CAMT113
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan = "1">HCM DIG BUS 
                    954231 (001-000)
                    Room: CAMT114
                    </td>
                    <td colspan = "3">SYS ANALYSIS & DESIGN FOR MM
                    954244 (002-000)
                    Room: ILC-B306</td>
                    </tr>
                    <tr>
                    <td>Fr</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan = "1">CRIT READ AND EFFEC WRITE
                    001201 (120-000)
                    Room: RB5405
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
        </thead>
        </table>
    </main>
@endsection
