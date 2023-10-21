<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VT-Bokaro Steel Plant</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="custom.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: rgb(245, 240, 240);
            font-family: 'Roboto Condensed', sans-serif;
        }

        @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap');

        html,
        body {
            width: 100%;
            height: 100%;
        }

        #main {
            width: 100%;
            height: auto;
        }

        #nav {
            width: 100%;
            height: 80px;
            /* Fixed height for the navbar */
            background-color: rgb(0, 0, 0);
            /* Solid and opaque background color */
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 0 20px;
            /* Corrected the padding syntax */
            position: fixed;
            z-index: 99;
            gap: 40px;
            box-shadow: 6px 6px 6prgba(226, 221, 221, 0.327);
            border: 3px solid rgba(0, 0, 0, 0.488);
            /* Add a border for 3D effect */
        }



        #nav img {
            height: 95px;
            /* Increase the height to make it slightly larger than the navbar */
            filter: drop-shadow(15px 15px 15px rgba(52, 52, 52, 0.7));
            border-radius: 10px;
            /* Add rounded corners */
        }

        #nav h4 {
            position: relative;
            color: #ffffff;
            z-index: 0;
            margin: 20px;
            /* Added 'px' to specify margin value */
            cursor: pointer;
            /* Add cursor pointer on hover */
            transition: transform 0.2s, box-shadow 0.2s, font-size 0.2s;
            /* Add transitions */
        }

        #nav h4:hover,
        #nav h4 a:hover {
            transform: scale(1.1);
            /* Enlarge on hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            /* Add a bit more shadow on hover */
            font-size: 18px;
            /* Increase font size on hover */
            color: aqua;
        }

        header:hover {
            transform: scale(1.05);
            /* Scale the header on hover for a 3D effect */
            box-shadow: 0px 0px 40px 0px #000;
            /* Increase the box shadow on hover */
        }

        video {
            height: 100%;
            width: 100%;
            object-fit: absolute;
        }


        #video-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Adjust the alpha value (0.5) for the desired opacity */
            z-index: 1;
            /* Ensure the overlay is above the video */
        }


        #main {
            position: relative;
            z-index: 2;
            /* Ensure it's above the video and other elements */
            color: #333;
            /* Set text color */
            align-items: center;
            justify-content: center;
        }

        /* Style for the page1 content */
        #page1 {
            height: 100vh;
            width: 100%;
            padding: 20px;
            position: relative;
            background-color: rgba(255, 255, 255, 0);
            /* Add a semi-transparent background */
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            /* Align items to the bottom */
            flex-direction: column;
        }

        #page1 h1,
        #page1 p {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: #ffffffce;
            /* Set the text color to contrast with the shadow */
            margin: 0;
            position: relative;
        }

        /*ANURAG SINHA
/*INTERN @SAIL 2023*/
        #page1 h1 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 50px;
            /* Adjust the font size as needed */
            text-shadow: 10px 10px 15px #000;
            /* Add a 3D shadow effect to the text */
            color: #ffffffb0;
        }

        #page1 h2 {
            color: #ffffffb0;
            text-shadow: 2px 2px 5px #000
        }

        #page1 p {
            color: #ffffffb0;

            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 18px;
            /* Adjust the font size as needed */
            text-shadow: 2px 2px 5px #000;
            /* Add a 3D shadow effect to the text */
        }


        #text {
            margin-top: auto;
            /* Push the text to the top of the remaining space */
        }

        /*ANURAG SINHA
/*INTERN @SAIL 2023*/
        #page1 h1 {
            font-size: 65px;
            font-weight: 500;
        }

        #page2 {
            height: 100vh;
            width: 100%;
            padding: 20px;
            border-radius: 5px;
            display: flex;
            justify-content: safe;
            align-items: center;
            flex-direction: column;
            background-color: #141111e5;
            /* Background color for page 2 */
            padding: 20px;
            /* Add padding to separate content from edges */
            color: #ffffffc9;
            /* Text color for page 2 */
            position: relative;
            z-index: 2;
        }

        /* Style for the content container */
        .content {
            max-width: 800px;
            /* Adjust the maximum width as needed */
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
            /* Background color for the content */
            font-family: 'Roboto Condensed', sans-serif;
            color: #333;
            /* Text color */
        }

        /* Style for headings (h3) */
        .content h3 {
            font-size: 24px;
            /* Adjust the font size as needed */
            font-weight: bold;
            margin-top: 20px;
            /* Add margin to separate headings */
        }

        /* Style for paragraphs (p) */
        .content p {
            font-size: 18px;
            /* Adjust the font size as needed */
            line-height: 1.5;
            /* Adjust line height for readability */
            margin-bottom: 10px;
            /* Add margin to separate paragraphs */
        }

        /* Style for bullet points */
        .content ul {
            list-style-type: disc;
            /* Use bullets for lists */
            margin-left: 20px;
            /* Add left margin for indentation */
        }

        /* Style for list items */
        .content li {
            font-size: 18px;
            /* Adjust the font size as needed */
            line-height: 1.5;
            /* Adjust line height for readability */
            margin-bottom: 10px;
            /* Add margin to separate list items */
        }


        iframe {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Add this CSS to remove the underline from the links */
        .no-underline {
            text-decoration: none;
        }

        /*ANURAG SINHA
/*INTERN @SAIL 2023*/
        #page2 img {
            height: 200px;
            width: 930px;
            opacity: 0.7;
            /* Adjust the opacity value (0.0 to 1.0) for the desired level of transparency */
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.285);
            /* Adjust the box-shadow values for the 3D effect */
            margin: 20px 0;
            border-radius: 10px;
        }

        #page2 h1 {
            font-size: 36px;
            font-weight: bold;
        }

        #internship-info {
            background-color: #f0f0f03c;
            /* Background color of the text box */
            padding: 20px;
            /* Padding around the text box content */
            border: 5px solid #ccc;
            /* Border around the text box */
            border-radius: 5px;
            /* Rounded corners for the text box */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.458);
            /* Box shadow for a subtle lift */
        }

        #internship-info h2 {
            font-weight: bold;
            color: antiquewhite;
        }

        /*ANURAG SINHA
/*INTERN @SAIL 2023*/
        #internship-info ul {
            list-style-type: disc;
            /* Use bullets for list items */
            margin-left: 20px;
            color: #f4f4f4;
            /* Indent the list items */
        }

        #internship-info h3 {
            color: #f4f4f4;
        }

        #internship-info p {
            margin-bottom: 10px;
            color: #ccc;
        }

        #img2 {
            width: 100%;
            /* Adjust the width as needed */
            text-align: center;
            /* Center the image horizontally */
            margin-top: 20px;
            /* Adjust the margin as needed */
        }

        #img2 img {
            max-width: 100%;
            /* Ensure the image does not exceed its container */
            height: auto;
            /* Maintain the image's aspect ratio */
            border: 1px solid #ccc;
            /* Add a border around the image */
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
            /* Add a subtle box shadow */
        }

        #page3 h1 {
            font-size: 36px;
            font-weight: bold;
        }

        #footer {
            width: 98vw;
            /* Extend across the entire width of the viewport */
            background-color: #000000a0;
            font-weight: 400;
            color: #fff;
            padding: 20px;
            text-align: center;
            /* Center the text horizontally */
        }
    </style>
</head>

<body>
    <div id="nav">
        <img
            src="data:image/png;base64,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">
        <h4><a href="https://sail.co.in/en/plants/about-bokaro-steel-plant" class="no-underline"
                target="_blank">HOME</a></h4>

        <h4><a href="#About" class="no-underline" id="about-link">ABOUT</a></h4>

        <h4><a href="login.php" class="no-underline">REGISTER</a></h4>
    </div>
    <div id="cursor"></div>
    <div id="video-overlay"></div>
    <iframe width="100%" height="600"
        src="https://www.youtube.com/embed/7EN4hdlKd2k?si=_R3d0yYz31afkrWb&amp;controls=0&amp;clip=UgkxFTXdW-gZWeK7O5ZvXE01jSrsuKeaTojr&amp;clipt=ENfdCRi3sg0&autoplay=1&mute=1&playsinline=1&start=0&origin=https://example.com"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>

    /*ANURAG SINHA
    /*INTERN @SAIL 2023*/
    <div id="main">
        <div id="page1">
            <h1>
                <pre>Intern with "THE MAHARATNA"</pre>
            </h1>
            <h2>@SAIL, Bokaro Steel Plant</h2>
        </div>
        <div id="page2">

            <img src=" https://sail.co.in/sites/default/files/banner/2020-07/Bokaro-steel-plants_0.jpg">
            <h1>Internship Programme</h1>
            <br>
            <div id="internship-info">
                <h2>Coverage:</h2>
                <p>
                    Open to students from various educational backgrounds, including Engineering, Management, Medical,
                    Polytechnics, B.Com, B.Sc, BA, BBA, BCA.
                </p>
                <p>
                    Two categories of students:
                </p>

                <ul>
                    <li>Category A: Wards of current and former employees of Bokaro Steel Plant (BSL).</li>
                    <li>Category B: Non-BSL students.</li>
                </ul>
                <br>


                <h2>Training Period:</h2>
                <p>
                    - May to December annually.
                </p>
                <p>
                    - Timing: 9:00 AM to 5:00 PM.
                </p>
                <p>
                    - Batch size: Limited to 100 students per batch.
                </p>
                <br>

                <h2>Types of Training:</h2>
                <h3>a) Vocational Training (Observation):</h3>
                <p>
                    - Duration: 2/4/6/8 weeks.
                </p>
                <p>
                    - Trainees assigned to departments based on their curriculum.
                </p>
                <p>
                    - They report to the Training Engineer/Executive for shop floor training.
                </p>

                <h3>b) Vocational Training (Project-based):</h3>
                <p>
                    - For Engineering, Diploma, MBA (HR/Materials/Marketing/Finance, etc.), BBA, MCA, Law, Medical,
                    Para-Medical, B.Com students.
                </p>
                <p>
                    - Duration: 4/8/12/16/20/24 weeks.
                </p>
                <p>
                    - Trainees receive project topics from the respective department.
                </p>
                <p>
                    - Guided by mentors for project completion.
                </p>
                <p>
                    - Submission of project report required.
                </p>
                <br>

                <h2>Training Activities:</h2>
                <p>
                    - Registration done fortnightly.
                </p>
                <p>
                    - Initial classes on "Overview of Bokaro Steel Plant" and "Safety Awareness."
                </p>
                <p>
                    - Trainees provided with a training schedule, attendance card, gate pass, and safety equipment.
                </p>
                <p>
                    - Learning diary maintained and submitted at the end of training to HRD/NEC.
                </p>
                <br>
                <br>
                <br>
                <div id="img2">
                    <img src="https://imgtr.ee/images/2023/09/26/bb39414f70a4238bfcc249c182f0faa5.jpeg">
                </div>
            </div>
            <br>
            <br>
            <br>

            <div id="Page3">
                <br>
                <br>
                <br>
                <div id="footer">
                    <h1>&copy; SAIL-BOKARO. All rights reserved.</h1>
                </div>
            </div>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"
            integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"
            integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="script.js"></script>
        <script>
            // JavaScript code
            gsap.registerPlugin(ScrollTrigger);

            // Function to handle smooth scrolling to page1
            function scrollToPage1() {
                gsap.to(window, {
                    scrollTo: {
                        y: "#page2", // Scroll to the element with the ID "page1"
                        offsetY: 70 // Adjust the offset if you have a fixed header
                    },
                    duration: 1, // Duration of the scroll animation
                    ease: "power2.inOut" // Easing function for smooth scroll
                });
            }

            // Get the "About" button element by its ID
            const aboutButton = document.getElementById("about-link");

            // Add a click event listener to the "About" button
            aboutButton.addEventListener("click", scrollToPage2);

        </script>

</body>

</html>