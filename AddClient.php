<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Layout</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            width: 90%;
            margin: 20px auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto auto auto;
            gap: 20px;
        }

        .box {
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
        }

        .submit-btn {
            display: block;
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

        /* Tag Input Styles */
        .tag-input {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: #fafafa;
        }

        .tag-input input {
            flex: 1;
            border: none;
            outline: none;
            padding: 5px;
        }

        .tags-container .tag {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            position: relative;
        }

        .tags-container .tag .remove-tag {
            margin-left: 8px;
            cursor: pointer;
            font-weight: bold;
            color: white;
        }

        .save-btn {
            grid-column: span 2;
            text-align: center;
        }

        .save-btn button {
            background-color: #28a745;
            color: white;
            padding: 15px 30px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .save-btn button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<h1>Form Layout</h1>
<div class="container">
    <!-- Primary Information -->
    <div class="box">
        <h2>Primary Information</h2>
        <form>
            <div class="form-group">
                <label for="client-id">Client ID:</label>
                <input type="text" id="client-id" placeholder="Enter client ID">
            </div>
            <div class="form-group">
                <label for="business-name">Business Name:</label>
                <input type="text" id="business-name" placeholder="Enter business name">
            </div>
            <div class="form-group">
                <label for="website">Website:</label>
                <input type="text" id="website" placeholder="Enter website">
            </div>
            <div class="form-group">
                <label for="business-category">Business Category:</label>
                <div class="tag-input" id="business-category-container">
                    <input type="text" id="business-category" placeholder="Add a category and press Enter">
                </div>
            </div>
            <div class="form-group">
                <label for="short-description">Short Description:</label>
                <textarea id="short-description" rows="3" placeholder="Enter short description"></textarea>
            </div>
            <div class="form-group">
                <label for="long-description">Long Description:</label>
                <textarea id="long-description" rows="5" placeholder="Enter long description"></textarea>
            </div>
        </form>
    </div>

    <!-- Contact Information -->
    <div class="box">
        <h2>Contact Information</h2>
        <form>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" placeholder="Enter phone number">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="text" id="mobile" placeholder="Enter mobile number">
            </div>
            <div class="form-group">
                <label for="fax">Fax:</label>
                <input type="text" id="fax" placeholder="Enter fax number">
            </div>
            <div class="form-group">
                <label for="toll-free">Toll-Free:</label>
                <input type="text" id="toll-free" placeholder="Enter toll-free number">
            </div>
        </form>
    </div>

    <!-- Location Information -->
    <div class="box">
        <h2>Location Information</h2>
        <form>
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" id="country" placeholder="Enter country">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" placeholder="Enter address">
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" id="city" placeholder="Enter city">
            </div>
            <div class="form-group">
                <label for="state">State:</label>
                <input type="text" id="state" placeholder="Enter state">
            </div>
            <div class="form-group">
                <label for="zip">Zip Code:</label>
                <input type="text" id="zip" placeholder="Enter zip code">
            </div>
            <div class="form-group">
                <label for="time-zone">Time Zone:</label>
                <input type="text" id="time-zone" placeholder="Enter time zone">
            </div>
            <div class="form-group">
                <label for="map">Map:</label>
                <input type="text" id="map" placeholder="Enter map link">
            </div>
        </form>
    </div>

    <!-- Operation Information -->
    <div class="box">
        <h2>Operation Information</h2>
        <form>
            <div class="form-group">
                <label for="booking-link">Booking Link:</label>
                <input type="text" id="booking-link" placeholder="Enter booking link">
            </div>
            <div class="form-group">
                <label for="services-offered">Services Offered:</label>
                <div class="tag-input" id="services-container">
                    <input type="text" id="service-input" placeholder="Add a service and press Enter">
                </div>
            </div>
            <div class="form-group">
                <label for="brands-carried">Brands Carried:</label>
                <div class="tag-input" id="brands-container">
                    <input type="text" id="brand-input" placeholder="Add a brand and press Enter">
                </div>
            </div>
        </form>
    </div>

    <!-- Save Button -->
    <div class="save-btn">
        <button type="submit">Save</button>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        function handleTagInput(inputId, containerId) {
            const input = document.getElementById(inputId);
            const container = document.getElementById(containerId);

            input.addEventListener("keypress", (e) => {
                if (e.key === "Enter" && input.value.trim() !== "") {
                    e.preventDefault();
                    addTag(input.value.trim(), container);
                    input.value = "";
                }
            });
        }

        function addTag(value, container) {
            const tagElement = document.createElement("span");
            tagElement.classList.add("tag");
            tagElement.textContent = value;

            const removeTag = document.createElement("span");
            removeTag.textContent = "×";
            removeTag.classList.add("remove-tag");
            removeTag.addEventListener("click", () => tagElement.remove());

            tagElement.appendChild(removeTag);
            container.appendChild(tagElement);
        }

        handleTagInput("business-category", "business-category-container");
        handleTagInput("service-input", "services-container");
        handleTagInput("brand-input", "brands-container");
    });
</script>

</body>
</html>
