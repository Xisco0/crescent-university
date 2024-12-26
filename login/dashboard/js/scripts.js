

document.addEventListener("DOMContentLoaded", function() {
setTimeout(function() {
document.querySelector(".preload").style.display = "none";
document.getElementById("content").style.display = "block";
}, 800);
});


function _next_page(next_id) {
$('.log-div').hide();
$('#'+next_id).fadeIn(1000);
}


function Getpass(page) {
$('.overlay').html('<div class="ajax-loader"><br><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
try{
$.post(admin_portal_dashboard, 
{ action: 'get-page', page: page }, 
function(html) {
$('.overlay').html(html);
});}
catch (error) {
console.error(error);
}
}

function Getyear(){

  const currentYear = new Date().getFullYear();
  const startYear = 2024;
  const yearSpan = document.getElementById('year');

  if (currentYear > startYear) {
    yearSpan.textContent = startYear + '-' + currentYear;
  } else {
    yearSpan.textContent = startYear;
  }
}


function _close(){
$('.overlay').fadeOut(500);
}

function _collapse(div_id) {
  var x = document.getElementById(div_id + "num");
  if (x.innerHTML === '&nbsp;<i class="bi-chevron-up"></i>&nbsp;') {
    x.innerHTML = '&nbsp;<i class="bi-chevron-down"></i>&nbsp;';
  } else {
    x.innerHTML = '&nbsp;<i class="bi-chevron-up"></i>&nbsp;';
  }
    $('#'+div_id+'answer').slideToggle('slow');
}
  





  function toggleDropdown(contentId) {
    const dropdown = document.getElementById(contentId);
  
    if (dropdown.style.display === 'none' || dropdown.style.display === '') {
      dropdown.style.display = 'block'; 
    } else {
      dropdown.style.display = 'none';   
    }
  }
  
  function setupDropdown() {
    const button = document.getElementById('dropdown-button-1');
    button.addEventListener('click', function(event) {
      event.stopPropagation();  // Prevent the click from propagating to the window
      toggleDropdown('dropdown-content-1');
    });
  }
  
  window.addEventListener('click', function(event) {
    // Check if the click was outside the dropdown button and content
    const dropdownButton = document.getElementById('dropdown-button-1');
    const dropdownContent = document.getElementById('dropdown-content-1');
    
    // If the click is not inside the dropdown button or content, close the dropdown
    if (!dropdownButton.contains(event.target) && !dropdownContent.contains(event.target)) {
      dropdownContent.style.display = 'none';
    }
  });
    
document.addEventListener('DOMContentLoaded', function() {
  const dropdown = document.getElementById('dropdown-content-1');
  dropdown.style.display = 'none';  // Initially hide the dropdown

  setupDropdown();  // Set up the dropdown button click listener
});
    



function _getActiveLink(divid) {
	$("#dashboard, #update-bio, #transfer, #payment-history,#payment-advice,#register-course,#change-password").removeClass("active-li");
	$("#" + divid).addClass("active-li");
	$("#page_title").html($("#_" + divid).html());
}



// function Getpages(page, divid) {
//   _getActiveLink(divid); 
//   $('#page-content').html('<div class="ajax-loader"><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn(500); 
//   var action = 'get-page';  
//   var dataString = {
//     action: action,
//     page: page
//   }; 
//   axios.post(admin_portal, dataString)
//   .then(function(response) {
//     $('#page-content').html(response.data); 
//   })
//   .catch(function(error) {
//     // Handle any errors in the Axios request
//     $('#page-content').html('<p>Error loading page content. Please try again later.</p>');
//     console.error("Axios Error: ", error);
//   });
// }


function Getpages(page, divid) {
  _getActiveLink(divid);
 $('#page-content').html('<div class="ajax-loader"><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn(500);
 var action = 'get-page';
 var dataString = 'action=' + action + '&page=' + page;
 $.ajax({
   type: "POST",
   url: admin_portal,
   data: dataString,
   cache: false,
   success: function (html) {
     $('#page-content').html(html);
   }
 });
}



function Getyear() {
  const currentYear = new Date().getFullYear();

  // Select all elements with the class "year-select"
  const yearSelects = document.querySelectorAll('.year-select');
  
  // Loop through the yearSelects and populate each one
  for (let year = 1950; year <= currentYear; year++) {
    // Create a new option for each select element
    const yearOption = document.createElement('option');
    yearOption.value = year;
    yearOption.textContent = year;

    // Append the new option to each select
    yearSelects.forEach(select => {
      select.appendChild(yearOption.cloneNode(true));  // Use cloneNode to prevent reusing the same node
    });
  }

  // Populate year selects for the given range
  populateYearSelect(1950, 2024, "year-select");
}

function populateYearSelect(startYear, endYear, className) {
  const yearSelects = document.querySelectorAll(`.${className}`);  // Select all selects with the class

  yearSelects.forEach(yearSelect => {
    // Create and append options for the year range
    for (let year = startYear; year <= endYear; year++) {
      const option = document.createElement('option');
      option.value = year;
      option.textContent = year;
      yearSelect.appendChild(option);
    }
  });
}





function sittings(){
  document.getElementById('myDiv').addEventListener('change', function() {
    var selectedValue = this.value; // Get the selected value
    var secondSittingDiv = document.getElementById('secondsitting'); // Get the div to show/hide

    if (selectedValue == "2") {
      secondSittingDiv.style.display ='block'; // Show the second sitting div
      // secondSittingDiv.style.position = 'absolute'; 
    } else {
        secondSittingDiv.style.display = 'none'; // Hide the second sitting div for other values
    }
});


}

function subjects(){
const subjects = [
  "Data processing",
  "Christian Religion Knowledge",
  "Islam",
  "Catering and Craft",
  "Commerce",
  "Financial Accounting",
  "Physics",
  "Chemistry",
  "Biology",
  "Agricultural Science",
  "Further Mathematics",
  "Economics",
  "Geography",
  "History",
  "Government",
  "Literature-in-English",
  "Computer Science",
  "Technical Drawing",
  "Fine Arts",
  "Music",
  "Home Economics",
  "Physical Education",
  "Religious Studies"
];

// Function to populate select elements with a given class
function populateSelectElements(className) {
  const selectElements = document.querySelectorAll(className);

  selectElements.forEach(select => {
      subjects.forEach(subject => {
          const option = document.createElement('option');
          option.value = subject;
          option.text = subject;
          select.appendChild(option);
      });
  });
}

// Call the function to populate select elements with the class 'subject-select'
populateSelectElements('.subject-select');
}




function grades(){
  const subjects = [
    "A1",
    "B2",
    "B3",
    "C4",
    "C5",
    "D7",
    "E8",
    "F9",
    "AR",
    "AB"
  ];
  
  // Function to populate select elements with a given class
  function populateSelectElements(className) {
    const selectElements = document.querySelectorAll(className);
  
    selectElements.forEach(select => {
        subjects.forEach(subject => {
            const option = document.createElement('option');
            option.value = subject;
            option.text = subject;
            select.appendChild(option);
        });
    });
  }
  
  // Call the function to populate select elements with the class 'subject-select'
  populateSelectElements('.grade-select');
  }


 
function image(){
// Get the image element and the hidden file input
const imagePreview = document.getElementById('imagePreview');
const imageInput = document.getElementById('imageInput');

// When the image is clicked, trigger the file input to open the file picker
imagePreview.addEventListener('click', function() {
    imageInput.click();  // Simulate a click on the hidden file input
});

// When the user selects a new image, update the image preview
imageInput.addEventListener('change', function(event) {
    const file = event.target.files[0];

    if (file) {
        const reader = new FileReader();

        // Once the file is read, update the image preview
        reader.onload = function(e) {
            imagePreview.src = e.target.result;  // Set the image source to the selected file
        };

        // Read the selected file as a Data URL (base64)
        reader.readAsDataURL(file);
    }
});

}

function changeButtonText(buttonId) {
  var buttonText = $("#" + buttonId);

  // Fade out current text
  buttonText.fadeOut(500, function() {
    // Change text after fading out
    if (buttonText.html() === "Accept") {
        buttonText.html('<i class="bi-check"></i>'); // Add the check icon
    } else {
        buttonText.html("Accept"); // Revert back to "Accept Course"
    }
    // Fade in after text change
    buttonText.fadeIn(500);
  });
}


function generateBiodata() {
  var fullName = document.getElementById('fullName').value;
  var dob = document.getElementById('dob').value;
  var course = document.getElementById('course').value;
  var email = document.getElementById('email').value;
  var address = document.getElementById('address').value;

  // Create biodata output
  var biodataHTML = `
      <p><strong>Full Name:</strong> ${fullName}</p>
      <p><strong>Date of Birth:</strong> ${dob}</p>
      <p><strong>Course:</strong> ${course}</p>
      <p><strong>Email:</strong> ${email}</p>
      <p><strong>Address:</strong><br>${address}</p>
  `;

  // Show the biodata
  document.getElementById('biodataDetails').innerHTML = biodataHTML;
  document.getElementById('biodataOutput').style.display = 'block';
}

function printBiodata() {
  var printWindow = window.open('', '', 'height=600,width=800');
  printWindow.document.write('<html><head><title>Print Biodata</title></head><body>');
  printWindow.document.write(document.getElementById('biodataOutput').innerHTML);
  printWindow.document.write('</body></html>');
  printWindow.document.close();
  printWindow.print();
}

function _password(inputId, togglerId) {
  var password = document.getElementById(inputId);
  var toggler = document.getElementById(togglerId);
  
  if (password.type == 'password') {
    password.setAttribute('type', 'text');
    toggler.classList.add('bi-eye');
    toggler.classList.remove('bi-eye-slash');
  } else {
    toggler.classList.remove('bi-eye');
    toggler.classList.add('bi-eye-slash');
    password.setAttribute('type', 'password');
  }
}


function transdepartment(){
const departmentsAndCourses = [
  {
    id: 1,
    department: "Computer Science",
    preferredCourses: [
      "Software Engineering",
      "Artificial Intelligence",
      "Data Science",
      "Cyber Security",
      "Database Management",
      "Web Development",
      "Mobile Application Development",
      "Cloud Computing",
      "Computer Networks",
      "Human-Computer Interaction",
      "Operating Systems",
      "Game Development",
      "Blockchain Technology",
      "Machine Learning",
      "Computer Graphics",
      "Internet of Things (IoT)",
      "Big Data Analytics"
    ]
  },
  {
    id: 2,
    department: "Electrical Engineering",
    preferredCourses: [
      "Power Systems",
      "Circuit Analysis",
      "Control Systems",
      "Signal Processing",
      "Electronics",
      "Communication Systems",
      "Renewable Energy",
      "Power Electronics",
      "Microelectronics",
      "Embedded Systems",
      "VLSI Design",
      "Robotics",
      "Instrumentation and Measurement",
      "Electrical Machines",
      "Electric Drives",
      "Power Generation and Transmission",
      "Electromagnetic Theory"
    ]
  },
  {
    id: 3,
    department: "Civil Engineering",
    preferredCourses: [
      "Structural Engineering",
      "Geotechnical Engineering",
      "Water Resources Engineering",
      "Transportation Engineering",
      "Environmental Engineering",
      "Building Materials",
      "Construction Management",
      "Surveying and Mapping",
      "Soil Mechanics",
      "Hydraulics",
      "Road Design and Construction",
      "Concrete Technology",
      "Steel Structures",
      "Foundation Engineering",
      "Urban Planning",
      "Disaster Management in Civil Engineering",
      "Advanced Structural Analysis"
    ]
  },
  {
    id: 4,
    department: "Mechanical Engineering",
    preferredCourses: [
      "Thermodynamics",
      "Fluid Mechanics",
      "Mechanical Vibrations",
      "Machine Design",
      "Heat Transfer",
      "Materials Science",
      "Manufacturing Processes",
      "Robotics",
      "Internal Combustion Engines",
      "Refrigeration and Air Conditioning",
      "Biomechanics",
      "Automotive Engineering",
      "Advanced Manufacturing",
      "Energy Systems",
      "Mechanical Behavior of Materials",
      "Finite Element Analysis",
      "Advanced Thermodynamics"
    ]
  },
  {
    id: 5,
    department: "Medicine",
    preferredCourses: [
      "Anatomy",
      "Physiology",
      "Pharmacology",
      "Surgery",
      "Pathology",
      "Microbiology",
      "Pediatrics",
      "Obstetrics and Gynecology",
      "Emergency Medicine",
      "Family Medicine",
      "Psychiatry",
      "Internal Medicine",
      "Immunology",
      "Neurology",
      "Radiology",
      "Clinical Pharmacology",
      "Forensic Medicine",
      "Anesthesiology"
    ]
  },
  {
    id: 6,
    department: "Law",
    preferredCourses: [
      "Constitutional Law",
      "Criminal Law",
      "International Law",
      "Corporate Law",
      "Family Law",
      "Environmental Law",
      "Property Law",
      "Human Rights Law",
      "Intellectual Property Law",
      "Commercial Law",
      "Labour Law",
      "Administrative Law",
      "Banking and Finance Law",
      "Media and Communication Law",
      "Land Law",
      "Legal Writing and Research",
      "International Humanitarian Law",
      "Maritime and Admiralty Law"
    ]
  },
  {
    id: 7,
    department: "Accounting",
    preferredCourses: [
      "Financial Accounting",
      "Management Accounting",
      "Auditing",
      "Taxation",
      "Corporate Finance",
      "Financial Management",
      "Forensic Accounting",
      "International Accounting",
      "Cost Accounting",
      "Advanced Financial Reporting",
      "Public Sector Accounting",
      "Financial Statement Analysis",
      "Accounting Information Systems",
      "Risk Management",
      "Investment Analysis",
      "Financial Modeling",
      "Business Law",
      "Accounting for Non-Profit Organizations"
    ]
  },
  {
    id: 8,
    department: "Business Administration",
    preferredCourses: [
      "Human Resource Management",
      "Marketing Management",
      "Operations Management",
      "Entrepreneurship",
      "Strategic Management",
      "Financial Management",
      "Organizational Behavior",
      "Project Management",
      "Corporate Governance",
      "International Business",
      "Business Ethics",
      "Supply Chain Management",
      "Leadership and Organizational Development",
      "Business Communication",
      "Consumer Behavior",
      "Marketing Research",
      "E-commerce and Digital Marketing",
      "Business Analytics"
    ]
  },
  {
    id: 9,
    department: "Mass Communication",
    preferredCourses: [
      "Journalism",
      "Public Relations",
      "Broadcasting",
      "Advertising",
      "New Media",
      "Communication Theory",
      "Mass Media Law",
      "Event Management",
      "Film and Television Production",
      "Advertising and Branding",
      "Crisis Communication",
      "Political Communication",
      "Social Media Management",
      "Media Planning and Buying",
      "Media Psychology",
      "Digital Journalism",
      "Television Studio Production",
      "Radio Programming"
    ]
  },
  {
    id: 10,
    department: "Biology",
    preferredCourses: [
      "Molecular Biology",
      "Genetics",
      "Cell Biology",
      "Ecology",
      "Environmental Biology",
      "Microbiology",
      "Botany",
      "Zoology",
      "Evolutionary Biology",
      "Marine Biology",
      "Immunology",
      "Bioinformatics",
      "Biotechnology",
      "Plant Physiology",
      "Animal Physiology",
      "Biochemistry",
      "Pharmacology",
      "Medical Microbiology"
    ]
  },
  {
    id: 11,
    department: "Sociology",
    preferredCourses: [
      "Criminology",
      "Social Work",
      "Social Psychology",
      "Development Sociology",
      "Sociological Theory",
      "Environmental Sociology",
      "Medical Sociology",
      "Sociology of Education",
      "Gender and Sexuality Studies",
      "Urban Sociology",
      "Rural Sociology",
      "Political Sociology",
      "Sociology of Religion",
      "Social Stratification",
      "Sociology of Deviance",
      "Social Research Methods",
      "Globalization and Social Change",
      "Conflict Resolution"
    ]
  },
  {
    id: 12,
    department: "Political Science",
    preferredCourses: [
      "International Relations",
      "Comparative Politics",
      "Political Economy",
      "Public Administration",
      "Political Theory",
      "Constitutional Law",
      "Governance and Development",
      "Election and Voting Systems",
      "Public Policy Analysis",
      "Human Rights and Democracy",
      "Security Studies",
      "Foreign Policy Analysis",
      "Political Institutions",
      "Political Parties and Electoral Systems",
      "Political Philosophy",
      "International Organizations",
      "Conflict Management",
      "International Law"
    ]
  },
  {
    id: 13,
    department: "Geography",
    preferredCourses: [
      "Physical Geography",
      "Human Geography",
      "Geographical Information Systems (GIS)",
      "Climatology",
      "Urban Geography",
      "Environmental Management",
      "Cartography",
      "Remote Sensing",
      "Agricultural Geography",
      "Development Geography",
      "Tourism Geography",
      "Political Geography",
      "Natural Hazards and Disasters",
      "Geography of Health",
      "Regional Planning",
      "Transportation Geography",
      "Global Warming and Climate Change"
    ]
  },
  {
    id: 14,
    department: "Agriculture",
    preferredCourses: [
      "Crop Science",
      "Animal Science",
      "Soil Science",
      "Agricultural Economics",
      "Agricultural Engineering",
      "Horticulture",
      "Agroforestry",
      "Farm Management",
      "Aquaculture",
      "Agribusiness",
      "Plant Pathology",
      "Crop Protection",
      "Rural Development",
      "Post-Harvest Technology",
      "Livestock Management",
      "Agro-Climate Adaptation",
      "Farm Machinery",
      "Irrigation Engineering"
    ]
  },
  {
    id: 15,
    department: "Chemistry",
    preferredCourses: [
      "Organic Chemistry",
      "Inorganic Chemistry",
      "Analytical Chemistry",
      "Physical Chemistry",
      "Biochemistry",
      "Polymer Chemistry",
      "Environmental Chemistry",
      "Industrial Chemistry",
      "Forensic Chemistry",
      "Nanotechnology",
      "Medicinal Chemistry",
      "Pharmaceutical Chemistry",
      "Green Chemistry",
      "Analytical Instrumentation",
      "Surface Chemistry",
      "Chemical Engineering",
      "Petrochemicals and Fuels",
      "Agricultural Chemistry"
    ]
  },
  {
    id: 16,
    department: "Physics",
    preferredCourses: [
      "Quantum Mechanics",
      "Thermodynamics",
      "Electromagnetism",
      "Solid State Physics",
      "Nuclear Physics",
      "Astrophysics",
      "Optics",
      "Applied Physics",
      "Plasma Physics",
      "Condensed Matter Physics",
      "Computational Physics",
      "Particle Physics",
      "Geophysics",
      "Meteorology",
      "Medical Physics",
      "Environmental Physics",
      "Materials Science",
      "Biophysics"
    ]
  }
];


// Populate the department dropdown
const departmentSelect = document.getElementById("department");
  const courseSelect = document.getElementById("course-select");

  // Function to populate department dropdown
  function populateDepartments() {
      departmentsAndCourses.forEach(dep => {
          const option = document.createElement("option");
          option.value = dep.id;
          option.textContent = dep.department;
          departmentSelect.appendChild(option);
      });
  }

  // Function to update courses based on selected department
  function updateCourses(departmentId) {
    // Clear existing courses
    courseSelect.innerHTML = "";

    // Find the department by its ID
    const department = departmentsAndCourses.find(dep => dep.id === parseInt(departmentId));

    // If a department is found, populate the courses
    if (department) {
      department.preferredCourses.forEach(course => {
        const option = document.createElement('option');
        option.value = course;
        option.textContent = course;
        courseSelect.appendChild(option);
      });
    }
  }

  // Initialize department dropdown on page load
  populateDepartments();

  // Event listener to update courses when a department is selected
  departmentSelect.addEventListener("change", function() {
    updateCourses(this.value);
  });
}

// Run the function when the page is loaded
document.addEventListener("DOMContentLoaded", transdepartment);





function count() {
  const counters = document.querySelectorAll('.counter'); // Select all counters

  counters.forEach(counter => {
      const target = +counter.getAttribute('data-target'); // Get the target number from data-target
      const increment = target / 100; // Controls the speed of the count

      let current = 0; // Start counting from 0
      function update() {
          if (current < target) {
              current += increment; // Increase the count by increment
              counter.innerText = "N " + Math.ceil(current).toLocaleString(); // Update the number (formatted with commas)
              setTimeout(update, 10); // Continue updating every 10ms
          } else {
              counter.innerText = "N " + target.toLocaleString(); // Ensure the final number is shown correctly
          }
      }
      update(); // Start the counting animation for each counter
  });
}

// Trigger the count function when the page is loaded
document.addEventListener('DOMContentLoaded', count);






function insertLink() {
  var url = prompt('Enter the URL:');
  if (url) {
      document.execCommand('createLink', false, url);
  }
}

// Function to insert an image
function insertImage() {
  var url = prompt('Enter the image URL:');
  if (url) {
      document.execCommand('insertImage', false, url);
  }
}

// Function to insert a table (3x3 by default)
function insertTable() {
  var rows = 3; // Default 3 rows
  var cols = 3; // Default 3 columns
  var table = '<table border="1" class="table-auto my-4">';

  for (var i = 0; i < rows; i++) {
      table += '<tr>';
      for (var j = 0; j < cols; j++) {
          table += '<td contenteditable="true" class="border px-2 py-1"> </td>';
      }
      table += '</tr>';
  }

  table += '</table>';
  document.execCommand('insertHTML', false, table);
}

// Function to remove font styles (like bold, italic, etc.)
function removeFontStyle() {
  document.execCommand('removeFormat');
}

// Function to show the content (HTML) after editing
function showText() {
  var editorContent = document.getElementById('editor').innerHTML;
  document.getElementById('displayMessage').innerHTML = editorContent;
}



function setFontSize() {
  let fontSize = document.getElementById("fontSizeSelect").value + "px";
  document.execCommand('styleWithCSS', false, true);
  document.execCommand('fontSize', false, fontSize);
}



function initQuillEditor() {
  const editor = new Quill('#editor', {
    modules: {
      toolbar: [
        [{ header: [1, 2, 3, 4, 5, 6, false] }],
        ['bold', 'italic', 'underline','strike'],
        ['image', 'code-block'],
        [{color: [] }, {background: []}],
      ]
    },
    placeholder: 'Type here...',
    theme: 'snow'
  });
}



function closeAlert(alertId) {
  const alertElement = document.getElementById(alertId);
  alertElement.style.opacity = '0';  // Fade out the alert
  setTimeout(function() {
      alertElement.style.display = 'none'; // Hide the alert after fade-out completes
  }, 1000); // Ensure this time matches the fade-out duration (1 second)
}
