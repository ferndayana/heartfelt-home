<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>body {
    font-family: lalezer;
    background: url('image1.png.jpg')no-repeat center center/cover;
    display: flex;
    justify-content: center;
    align-items: center; 
    height: 100vh;
    margin: auto;
}

.form-container {
    background-color: rgba(255, 255, 255, 0.5);
    padding: 10px 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 400px;
    margin: auto;
    
}

h1 {
    text-align: center;
    color: #000000;
    margin-bottom: 20px;
}

.form-group {
    padding: 0px 0px;
    
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input, textarea, button {
    width: 100%;
    padding: 5px;
    margin: 3px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

select{
    width: 102%;
    padding: 5px;
    margin: 3px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

textarea {
    resize: auto;
 

}

button {
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 102%;
    padding: 5px;
    margin: 3px 0;
}

button:hover {
    background-color: #0056b3;
}

.hidden {
    display: none;
}

#successMessage {
    color: green;
    font-weight: bold;
    text-align: center;
    margin-top: 20px;
}
</style>
<body>
    <div class="form-container">
        <h1>Pet Adoption Form</h1>
        <form id="adoptionForm" action="form.php" method="POST">

        <div class="form-group">
                <label for="surename">Email</label>
                <input type="email" id="email" name="surname" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="surename">Surname</label>
                <input type="surname" id="surename" name="surname" placeholder="Enter your surname" required>
            </div>
        
            <div class="form-group">
                <label for="name">Location</label>
                <input type="text" id="location" name="location" placeholder="Enter your location" required>
            </div>
            <div class="form-group">
                <label for="phone">Contact</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="rent">Do you rent or own? </label>
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
            </div>

            <div class="form-group">
                <label for="reason">Why Do You Want to Adopt?</label>
                <textarea id="reason" name="reason" rows="4" placeholder="Explain your reasons" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
        <p id="successMessage" class="hidden">Thank you for your interest! We will contact you soon.</p>
    </div>
    <script src="script.js">document.getElementById("adoptionForm").addEventListener("submit", function(event) {
        event.preventDefault();
        
        
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const pet = document.getElementById("pet").value;
        const reason = document.getElementById("reason").value.trim();
    
        
        if (!name || !email || !phone || !pet || !reason) {
            alert("Please fill out all fields before submitting.");
            return;
        }
    
        
        document.getElementById("successMessage").classList.remove("hidden");
    
        
        document.getElementById("adoptionForm").reset();
    });
    </script>
</body>
</html>
