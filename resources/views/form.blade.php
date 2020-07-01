<!DOCTYPE html>
<html>
   <head>
       <title>SanberBook</title>
       <meta charset="UTF-8">
   </head> 

   <body>
       <h1>Buat Account Baru!</h1>
       <h3>Sign Up Form</h3>

       <form action="/sapa" method="POST">
            @csrf
          <label for="nama_user">First Name:</label>
          <br><br>
          <input type="text" name="first_name"> 
          <br><br>

          <label for="nama_user">Last Name:</label>
          <br><br>
          <input type="text" name="last_name">
          <br><br>

          <label>Gender:</label>
          <br><br>
          <input type="radio" name="gender"> Male <br>
          <input type="radio" name="gender"> Female <br>
          <input type="radio" name="gender"> Other
          <br><br>

          <label>Nationality:</label>
          <br><br>
          <select>
              <option value="indonesian">Indonesian</option>
              <option value="singaporean">Singaporean</option>
              <option value="malaysian">Malaysian</option>
              <option value="australian">Australian</option>
              <option value="other">Other</option>
          </select>
          <br><br>

          <label>Language Spoken:</label>
          <br><br>
          <input type="checkbox" name="bahasa">Bahasa Indonesia <br>
          <input type="checkbox" name="english">English <br>
          <input type="checkbox" name="other_language">Other
          <br><br>

          <label>Bio:</label>
          <br><br>
          <textarea cols="30" rows="10"></textarea>
          <br>
          <input type="submit" value="Sign Up">
       </form>

   </body>

</html>
