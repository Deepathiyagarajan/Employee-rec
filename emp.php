<?php
include("P:\\xampp\\htdocs\\jayadeepa\\config.php");
$query = "SELECT * FROM employee_info";
$result = mysqli_query($mysqli, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view data table</title>
    <link rel="stylesheet" href="table.css">
</head>
<style>
table{
    margin-top:40px;
    margin-left:auto;
    margin-right:auto;
}
th{
    color:darkgreen;
}
button{
    color:
}
</style>
<body style="background-image:url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJQAzQMBIgACEQEDEQH/xAAaAAADAQEBAQAAAAAAAAAAAAABAgMABAUH/8QAGxABAQEBAQEBAQAAAAAAAAAAAAERAhIxIQP/xAAYAQEBAQEBAAAAAAAAAAAAAAAAAQIDBP/EABYRAQEBAAAAAAAAAAAAAAAAAAARAf/aAAwDAQACEQMRAD8A+W8OnhzcOjh6Hux0fzX4c/C/I0typylypzQUh4nDRRTRJDaA6OlGCCwMoIUNC0BBg1Vag1Cq1jFolqhOk+lOk+msEukevq3aXX1vGdefx9dHDn4W5eVjHRxV+a5+KtyNr8niXNPAVhpU5TRRSUdJo6IeUdJraofW0mtqhmLoWga0A0NVR0A1tXFwS1tLqqFpOjWktawT6T6n6p0S/W8Z15fFX4rn4q3FeVzx0cVbmufmq81G3RzTyo81TmiqymlTlHVRXR1PW1cFNbSSjqhtbS6GqH1tJraBta0uhoptAuta1gOltDS61mLTaS1tLa1mJQpaalrcR5PK3FQ5qnNeNzzXRzVOKhzVeaNVfmqSoc1SUWrSm1GU8oqmjKlptUU1tJK2tB9bSa2gdtJrWqGtDS6GmYHtDSXovpop70XSWha1hT2hpdDWim1qTW1pmvJ5V5RinLxuS3KvNR5p5RtbmnlR5p5RVpTekZTaq1XR9Jeh1oqso+ktHQqnptT9N6UqnoLSaF6WLT6Hol6C9LEp7S+iXouriU96b0nra2U+tpNbVD62l1lHmQ/KfJpXkcsVlPKlKeUVWU0qUo6NVbRlRlN6Varpp0h6H0pV/TekPQzpSrem9I+h9KlV9Bqd6C9KVTQ1O9Bq4VS0vomtrWJuntDS62quHlbSaMv4KfR0mjqjzYaVPTSvK5KSmlSlNotVlHUpRlVVZR9I+h9KK+m9Jem9KLem9Ja06UW9D6R02qKa1qetaB7Q9E0NUPraTQ1cFNGVPW1aKaOpym0qqa2p+h0q150ptTlHXncapKOp6MqlU1tJraLVJW9JytqlV9NqejqlU9DKno6q1SUdT0dVT+h1PR0Da2k1tUNraXQ0D6Op6Oin0dT0dA+t6JraDigmnI+XFyKxvLYoEYcaQKza2DilbW0cbAaGgSM1i02tpWKtNo6noylKfW0rFWjraAFKbW0rKU2tpWA2tpRSpTSRsjM5uYZAyMwNkGSMyAWQcjMqsLMuDBWZVLfoMwALMBmZhQZmawYKLADMyDCzCv/Z');background-size:cover; background-repeat:no-repeat;">
    <button style= "font-size:15px; color:darkblue; margin:20px; background-color:violet; border-radius:10px; "><a href="dbemp.php" style="text-decoration:none";>Add Employee and Assign Task</a></button>
    <table align="center" border="2px" style="width:600px; border-color:darkblue; border-style:solid;  border-radius:13px; ">
    <tr>
        <th colspan='10' style="padding: 0.5%; background-color:plum;"><h2>Employee Info</h2></th>
    </tr> 
        <tr style=background-color:#9932cc>
            <td>Employee Id</td>
            <td>Employee Name</td>
            <td>Employee Email</td>
            <td>Employee Password</td>
            <td>Employee Mobile No</td>
            <td>Employee Role</td>
            <td>Employee Task</td>
            <td>Employee Address</td>
            <td>Operations</td>
        </tr>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
            ?>
            <tr style= "border:1px;width:600px;background-color:mediumpurple;">
            <td><?php echo $rows['id']; ?></td>
            <td><?php echo $rows['name'];?></td>
            <td><?php echo $rows['email']; ?></td>
            <td><?php echo $rows['password'];?></td>
            <td><?php echo $rows['mobile'];?></td>
            <td><?php echo $rows['role'];?></td>
            <td><?php echo $rows['task'];?></td>
            <td><?php echo $rows['address'];?></td>
            <td>
                <button style=" width:100px;border-radius:10px; border:2px; margin-top:5px; margin-left:2px; "><a href="update.php?id=<?php echo $rows['id']?>" style="text-decoration:none; border-color:darkgreen; color:darkgreen; font-size:15px;">Update</a></button>
                <button style="width:100px; border-radius:10px;  border:2px; margin-top:5px; margin-bottom:5px; margin-left:2px;"><a href="delete.php?delete_id=<?php echo $rows['id'];?>" style="text-decoration:none; border-color:darkgreen; color:darkred; font-size:15px; ">Delete</a></button>
        </td>
           </tr>
         <?php  
        }
        ?>
       
    </table>
        </body>
        </html>