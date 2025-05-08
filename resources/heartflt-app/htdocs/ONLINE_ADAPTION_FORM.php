<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $host = 'localhost';
    $db = 'heartfelt_homes';
    $user = 'root';
    $password = '';

   
    $conn = null;

    try {
        
        $conn = new mysqli($host, $user, $password, $db);

        
        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        }

        
        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);
        $location = $conn->real_escape_string($_POST['location']);
        $phone = $conn->real_escape_string($_POST['phone']);
        $pet = $conn->real_escape_string($_POST['pet']);
        $rent = $conn->real_escape_string($_POST['rent']);
        $yard = $conn->real_escape_string($_POST['yard']);
        $pets = $conn->real_escape_string($_POST['pets']);
        $adopted = $conn->real_escape_string($_POST['adopted']);
        $long = $conn->real_escape_string($_POST['long']);
       

       
        $sql = "INSERT INTO adoptionform 
                (Fullname, email, location, Contact, PetToAdopt, Rent, Yard, Pets, Adopted, LongTermCommitment)
                VALUES ('$name', '$email', '$location', '$phone', '$pet', '$rent', '$yard', '$pets', '$adopted', '$long')";

        if ($conn->query($sql) === TRUE) {
           
            header("Location: " . htmlspecialchars($_SERVER['PHP_SELF']) . "?success=true");
            exit();
        } else {
            throw new Exception("Error inserting data: " . $conn->error);
        }
    } catch (Exception $e) {
        echo '<p id="errorMessage">' . htmlspecialchars($e->getMessage()) . '</p>';
    } finally {
       
        if ($conn !== null) {
            $conn->close();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Form</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: lalezer;
            background: url('image1.png.jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: auto;
        }

        .form-container {
    background-color: hsla(0, 0%, 100%, 0.477);
    padding: 10px 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 400px;
    margin: auto;
    transform: scale(0.9); 
    transition: transform 0.3s ease; 
}
        

        h1 {
            text-align: center;
            color: #000000;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input, textarea, select, button {
            width: 100%;
            padding: 5px;
            margin: 3px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: brown;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 102%;
            padding: 5px;
            margin: 3px 0;
        }

        button:hover {
            background-color: rgb(255, 196, 119);
        }

        #successMessage {
            color: green;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }

        #errorMessage {
            color: red;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="form-container">
    <h1>Pet Adoption Form</h1>
    <?php
    if (isset($_GET['success']) && $_GET['success'] == 'true') {
        echo '<p id="successMessage">Thank you for your submission! We will contact you soon.</p>';
    }
    ?>
    <form id="adoptionForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="location">Location</label>
        <input type="text" id="location" name="location" placeholder="Enter your location" required>

        <label for="phone">Contact</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

        <label for="pet">Type of Pet</label>
        <input type="text" id="pet" name="pet" placeholder="e.g., Dog, Cat" required>

        <label for="rent">Do you rent or own?</label>
        <select id="rent" name="rent" required>
            <option value="" disabled selected>Select</option>
            <option value="Rent">Rent</option>
            <option value="Own">Own</option>
        </select>

        <label for="yard">Do you have a yard or outdoor space?</label>
        <select id="yard" name="yard" required>
            <option value="" disabled selected>Select</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>

        <label for="pets">Do you have pets currently?</label>
        <select id="pets" name="pets" required>
            <option value="" disabled selected>Select</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>

        <label for="adopted">Have you adopted before?</label>
        <select id="adopted" name="adopted" required>
            <option value="" disabled selected>Select</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>

        <label for="long">Do you understand that adoption is a long-term commitment?</label>
        <select id="long" name="long" required>
            <option value="" disabled selected>Select</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>

        <label for="reason">Why Do You Want to Adopt?</label>
        <textarea id="reason" name="reason" rows="4" placeholder="Explain your reasons" required></textarea>

        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>
