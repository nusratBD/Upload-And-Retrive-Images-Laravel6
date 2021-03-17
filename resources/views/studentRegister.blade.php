<center>
    <form action="/store" method="POST" enctype="multipart/form-data">
        @csrf
        <br><br><br>
        <h2>Register New Student</h2><br>
    <label for="name">Name:</label>
    <input type="text" id = "name" name="name" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id = "email" name="email" required><br><br>
    <label for="image">Profile Pic:</label>
    <input type="file" id = "image" name="image" required><br><br>
    <button type="submit">Save</button>
    </form>

</center>
