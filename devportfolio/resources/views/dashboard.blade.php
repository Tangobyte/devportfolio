@extends('layout')

@section('content')
    <h1>Dashboard</h1>
    <article>
    </article>

    <article>
        <table>
            <tr>
                <th>Quartile</th>
                <th>Course</th>
                <th>EC</th>
                <th>Exam</th>
                <th>Grade</th>
            </tr>
            <tr>
                <td rowspan="5" class="tdnumber">1</td>
                <td>Program and career orientation</td>
                <td>2.5</td>
                <td>Written, verbal, other, individual.</td>
                <td>TBG</td>
            </tr>
            <tr>
                <!--<td>1</td>-->
                <td>Computer science basics</td>
                <td>5</td>
                <td>Written</td>
                <td>TBG</td>
            </tr>
            <tr>
                <!--<td>1</td>-->
                <td>Programming basics</td>
                <td>5</td>
                <td>Written</td>
                <td>TBG</td>
            </tr>
            <tr>
                <!--<td>1</td>-->
                <td>IT personality project week</td>
                <td>1.25</td>
                <td>Written, other</td>
                <td>TBG</td>
            </tr>
            <tr>
                <!--<td>1</td>-->
                <td>IT personality 1</td>
                <td>1.25</td>
                <td>Written, other</td>
                <td>TBG</td>
            </tr>
            <tr>
                <td class="tdnumber">2</td>
                <td>Gamedevelopment</td>
                <td>10</td>
                <td>Verbal, written, other</td>
                <td>TBG</td>
            </tr>
            <tr>
                <td rowspan="2" class="tdnumber">3</td>
                <td>Framework development</td>
                <td>5</td>
                <td>Written, other</td>
                <td>TBG</td>
            </tr>
            <tr>
                <!--<td>1</td>-->
                <td>Framework project 1</td>
                <td>7,5</td>
                <td>Verbal, Written, other</td>
                <td>TBG</td>
            </tr>
            <tr>
                <td rowspan="4" class="tdnumber">4</td>
                <td>Framework project 2</td>
                <td>7.5</td>
                <td>Verbal, Written, other</td>
                <td>TBG</td>
            </tr>
            <tr>
                <!--<td>1</td>-->
                <td>IT personality international week</td>
                <td>12.5</td>
                <td>Written, other</td>
                <td>TBG</td>
            </tr>
            <tr>
                <!--<td>1</td>-->
                <td>IT personality 2</td>
                <td>1.25</td>
                <td>Written, other</td>
                <td>TBG</td>
            </tr>
            <tr>
                <!--<td>1</td>-->
                <td>Personal professional development: exploration </td>
                <td>12.5</td>
                <td>Written, other</td>
                <td>TBG</td>
            </tr>
        </table>
    </article>
    <article>
        <h2>NBSA</h2>
        <p>NBSA (negative binding study advice) means if the student doesn't meet the minimum required EC's they will
            recieve the NBSA and they have to quit the course.
            Minimum required EC's is 45. If the progress bar below is full the student has reached the minimum required
            EC's of 45.
        </p>
        <p>Required</p>
        <progress class="progressblue" value="45" max="60"></progress>
        <p>My progress</p>
        <progress class="progressred" value="0" max="60"></progress>
    </article>
@endsection
