<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SanberBook | Form Register</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <div class="form">
        <form action="{{ url('welcome') }}" method = "post">
        @csrf
            <div class="input_firstname">
                <p><label for="first_name">First Name :</label></p>
                <span><input type="text" name="first_name" id="first_name"/></span>
            </div>
            <div class="input_lastname">
                <p><label for="last_name">Last Name :</label></p>
                <input type="text" name="last_name" id="last_name"/>
            </div>
            <div class="input_gender">
                <p><label for="gender">Gender :</label></p>
                <input type="radio" name="gender" id="gender" value="Male"> Male
                <br>
                <input type="radio" name="gender" id="gender" value="Female"> Female
                <br>
                <input type="radio" name="gender" id="gender" value="Other"> Other
            </div>
            <div class="input_nationality">
                <p><label for="nationality">Nationality</label></p>
                <select name="nationality" id="nationality">
                    <option value="Indonesian">Indonesian</option>
                    <option value="Malaysian">Malaysian</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Canada">Canada</option>
                </select>
            </div>
            <div class="input_checkbox">
                <p><label for="lang">Language spoken :</label></p>
                <input type="checkbox" name="lang1" id="lang1" value="bahasa"> Bahasa Indonesia
                <br>
                <input type="checkbox" name="lang1" id="lang2" value="english"> English
                <br>
                <input type="checkbox" name="lang1" id="lang3" value="other"> Other
            </div>
            <div class="input_bio">
                <p><label for="bio">Bio :</label></p>
                <textarea name="bio" id="last_name"></textarea>
            </div>

            <input type="submit" value="Sign Up">
        </form>
    </div>
</body>
</html>