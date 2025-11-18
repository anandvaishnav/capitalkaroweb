<?php

require_once '_data/db.php';


$legal_company_name = "DHANITA TECHNOLOGIES PRIVATE LIMITED";

// Main Logo

$site_name = "CapitalKaro";
$logo_name = "CapitalKaro";
$logo_img  = "assets/images/logo/logo.jpg";

$intro = 'CapitalKaro is a premier loan sourcing and white-label CRM solutions provider based in India. We specialize in empowering businesses and individuals to achieve their financial goals through innovative technology and expert guidance. Our comprehensive suite of services includes cutting-edge CRM platforms tailored for Direct Selling Agents (DSAs), enabling them to efficiently manage client relationships, streamline operations, and enhance productivity.';

$short ='Contact CapitalKaro today and start building your dream business with our powerful loan services and white-label CRM solutions.
';


// Social Media Links
$enable_social_links = true;

if ($enable_social_links) {
    
    $facebook = "https://www.facebook.com/capitalkaro/";
    $instagram = "https://www.instagram.com/capitalkaro_official/";
    $youtube = "//www.youtube.com/channel/UC82U9dkb6Rv82bxYVE4kXBg / https://www.youtube.com/@Capitalkaro_Official";
    $whatsapp = '+919217164796';
};


// Contect Details

$address = '115, 1st floor SRS Tower, Mewala Maharajpur, Sector 46, Faridabad, Haryana Delhi NCR 121010';
$address_short = 'Faridabad, Haryana Delhi NCR - India';
$phone = '+919217164796';
$support_email = 'support@capitalkaro.com';




// Copyright


$copy_right = "© Copyright ". Date("Y")."  All rights reserved | CapitalKaro - ".$legal_company_name." ";


$pricing = [

    'individual_plan' => [
        'title' => 'BASIC PLAN',
        'icon'  => 'flaticon-clock',
        'class' => 'first',
        'features' => [
              "CRM",
            "ADMIN PANEL",
            "WEBSITE",
            "APP",
        ],
        'checks' => [1, 1, 0, 0, 0],
        'price' => '₹29,999/-'
    ],

    'business_plan' => [
        'title' => 'ENTERPRISE PLAN',
        'icon'  => 'flaticon-growth',
        'class' => 'popular',
        'popular' => true,
        'features' => [
            "CRM",
            "ADMIN PANEL",
            "WEBSITE",
            "APP",
          
        ],
        'checks' => [1, 1, 1, 1, 1],
        'price' => '₹59,999/-'
    ],

    'corporate_plan' => [
        'title' => 'ADVANCED PLAN',
        'icon'  => 'flaticon-clock',
        'class' => 'last',
        'features' => [
              "CRM",
            "ADMIN PANEL",
            "WEBSITE",
            "APP",
        ],
        'checks' => [1, 1, 1, 0, 0],
        'price' => '₹39,999/-'
    ],

];


/// for dynamic content for pages 


//---------------------------------------------
// TESTIMONIALS
//---------------------------------------------
$testimonials = [
    [
        "name" => "Amit Malhotra",
        "designation" => "Loan DSA Partner",
        "image" => "assets/images/team/team-six.jpg",
        "message" => "Capital Karo ne mera kaam bahut aasaan kar diya. Unka white-label CRM use karke maine apna khud ka loan brand launch kiya – setup se support tak sab perfect tha.",
        "tagline" => "White-Label CRM Partner"
    ],
    [
        "name" => "Priya Nandwani",
        "designation" => "Independent Loan Advisor",
        "image" => "assets/images/team/team-eight.jpg",
        "message" => "CRM bahut smooth hai, tracking aur partner management ne mera business 3x grow kar diya. Support team bhi hamesha available rehti hai.",
        "tagline" => "Loan Sourcing & CRM User"
    ],
    [
        "name" => "Suresh Patidar",
        "designation" => "Finance Professional",
        "image" => "assets/images/team/team-one.jpg",
        "message" => "DSA business ke liye Capital Karo ka CRM best hai. Real-time tracking aur automation features ne meri productivity double kar di.",
        "tagline" => "CRM & Partner Network User"
    ],
];



//---------------------------------------------
// TEAM (Team list + Team detail data)
//---------------------------------------------
$team = [
    [
        'id' => 1,
        'name' => 'Joan Johnson',
        'designation' => 'Chief Financial Officer',
        'image' => 'assets/images/team/team-1.jpg',
        'short_bio' => 'Expert in financial planning & strategy.',
        'details' => [
            'about' => 'Joan leads the financial department with over 12 years of experience.',
            'experience' => [
                'Worked with Fortune 500 companies',
                'Specialist in corporate finance',
                'Certified financial strategist'
            ],
            'social' => [
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://in.linkedin.com/',
                'twitter' => 'https://x.com/'
            ]
        ]
    ],

    [
        'id' => 2,
        'name' => 'Donnie Southern',
        'designation' => 'Head Of Operation',
        'image' => 'assets/images/team/team-2.jpg',
        'short_bio' => 'Operations and process specialist.',
        'details' => [
            'about' => 'Donnie leads operations with precision and excellence.',
            'experience' => [
                '15+ years in operations',
                'Expert in process automation'
            ],
            'social' => [
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://in.linkedin.com/',
                'twitter' => 'https://x.com/'
            ]
        ]
    ],

    [
        'id' => 3,
        'name' => 'Alexandra Southern',
        'designation' => 'Loan Consultant',
        'image' => 'assets/images/team/team-3.jpg',
        'short_bio' => 'Specialist in loan consultation & customer relations.',
        'details' => [
            'about' => 'Alexandra helps clients with financial decision-making.',
            'experience' => [
                'Handled 250+ loan portfolios',
                'Strong customer service background'
            ],
            'social' => [
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://in.linkedin.com/',
                'twitter' => 'https://x.com/'
            ]
        ]
    ],

    [
        'id' => 4,
        'name' => 'Jessica White',
        'designation' => 'Credit Manager',
        'image' => 'assets/images/team/team-4.jpg',
        'short_bio' => 'Expert in credit analysis & approval.',
        'details' => [
            'about' => 'Jessica ensures the creditworthiness of all applicants.',
            'experience' => [
                '10+ years in credit analysis',
                'Certified credit analyst'
            ],
            'social' => [
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://in.linkedin.com/',
                'twitter' => 'https://x.com/'
            ]
        ]
    ],

    [
        'id' => 5,
        'name' => 'George Witt',
        'designation' => 'Financial Analyst',
        'image' => 'assets/images/team/team-5.jpg',
        'short_bio' => 'Data-driven financial insights expert.',
        'details' => [
            'about' => 'George analyzes market trends to guide loan decisions.',
            'experience' => [
                'MBA in Finance',
                'Specialist in financial modeling'
            ],
            'social' => [
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://in.linkedin.com/',
                'twitter' => 'https://x.com/'
            ]
        ]
    ],

    [
        'id' => 6,
        'name' => 'Robert Lee',
        'designation' => 'Credit Analyst',
        'image' => 'assets/images/team/team-6.jpg',
        'short_bio' => 'Experienced risk & credit assessment expert.',
        'details' => [
            'about' => 'Robert ensures accurate credit risk evaluations.',
            'experience' => [
                '7+ years in credit evaluation',
                'Certified risk analyst'
            ],
            'social' => [
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://in.linkedin.com/',
                'twitter' => 'https://x.com/'
            ]
        ]
    ],

    [
        'id' => 7,
        'name' => 'Raul Mayer',
        'designation' => 'Regional Manager',
        'image' => 'assets/images/team/team-7.jpg',
        'short_bio' => 'Regional operations & sales expert.',
        'details' => [
            'about' => 'Raul manages operations across multiple regions.',
            'experience' => [
                '12+ years in branch operations',
                'Leadership & strategy focused'
            ],
            'social' => [
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://in.linkedin.com/',
                'twitter' => 'https://x.com/'
            ]
        ]
    ],

    [
        'id' => 8,
        'name' => 'Alice Shelton',
        'designation' => 'Branch Manager',
        'image' => 'assets/images/team/team-8.jpg',
        'short_bio' => 'Branch operations & customer engagement.',
        'details' => [
            'about' => 'Alice leads the branch operations and customer satisfaction.',
            'experience' => [
                '8+ years managing branches',
                'Strong customer service background'
            ],
            'social' => [
                'facebook' => 'https://www.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'linkedin' => 'https://in.linkedin.com/',
                'twitter' => 'https://x.com/'
            ]
        ]
    ]
];



//---------------------------------------------
// FAQ
//---------------------------------------------
$faqs = [

    [
        "category" => "Home Loan",
        "items" => [
            [
                "question" => "1. What documents are required to apply for a loan?",
                "answer" => "To apply for a home loan, you'll need proof of income, credit history, employment verification, tax returns, and details about assets and liabilities."
            ],
            [
                "question" => "2. How recent should my documents be?",
                "answer" => "Most lenders require documents from the last 6 months, including salary slips, bank statements, and IT returns."
            ],
            [
                "question" => "3. Can I submit digital copies of my documents?",
                "answer" => "Yes, most lenders accept scanned or digital documents during initial verification."
            ],
            [
                "question" => "4. What should I do if I’m missing some of the required documents?",
                "answer" => "You can submit alternative documents or provide a written declaration depending on lender policies."
            ]
        ]
    ],

    [
        "category" => "Mortgage Loan",
        "items" => [
            [
                "question" => "1. What is the fixed-rate and an adjustable-rate mortgage?",
                "answer" => "Fixed-rate mortgages maintain the same interest rate throughout tenure, while adjustable-rate mortgages may fluctuate."
            ],
            [
                "question" => "2. What is the difference in adjustable-rate mortgage?",
                "answer" => "Adjustable-rate mortgages depend on market indexes and may increase or decrease over time."
            ],
            [
                "question" => "3. Difference between Home & Mortgage Loan?",
                "answer" => "Home loans help purchase homes; mortgage loans allow you to borrow against property value."
            ]
        ]
    ],

    [
        "category" => "Personal Loan",
        "items" => [
            [
                "question" => "1. What is a personal loan?",
                "answer" => "A personal loan is unsecured and can be used for any personal purpose such as travel or medical expenses."
            ],
            [
                "question" => "2. How do I qualify for a personal loan?",
                "answer" => "A good credit score, stable income, and clean financial history increase approval chances."
            ],
            [
                "question" => "3. How long does it take to get approved?",
                "answer" => "Approval can take from a few hours to 48 hours depending on lender and documentation."
            ]
        ]
    ],

    [
        "category" => "Student Loan",
        "items" => [
            [
                "question" => "1. How do I apply for a student loan?",
                "answer" => "You must submit admission proof, academic documents, income proof, and guarantor details."
            ],
            [
                "question" => "2. Do I need a cosigner for a student loan?",
                "answer" => "For most education loans, a co-applicant is mandatory unless applying for government schemes."
            ],
            [
                "question" => "3. Can I get a student loan with bad credit?",
                "answer" => "Yes, a student loan can be approved if the co-applicant has a strong credit profile."
            ]
        ]
    ],

];


//---------------------------------------------
// CAREERS
//---------------------------------------------
$careers = [
    [
        "id" => 1,
        "title" => "Loan Officer",
        "department" => "officer",
        "location" => "100% Remote",
        "type" => "Full Time",
        "description" => "Help clients navigate their loan options and provide expert guidance throughout the process."
    ],
    [
        "id" => 2,
        "title" => "Compliance Officer",
        "department" => "officer",
        "location" => "100% Remote",
        "type" => "Full Time",
        "description" => "Ensure all operations adhere to regulatory standards and internal policies."
    ],
    [
        "id" => 3,
        "title" => "Financial Analyst",
        "department" => "analyst",
        "location" => "100% Remote",
        "type" => "Full Time",
        "description" => "Assist customers with inquiries and ensure excellent service."
    ],
    [
        "id" => 4,
        "title" => "Operations Manager",
        "department" => "manager",
        "location" => "100% Remote",
        "type" => "Full Time",
        "description" => "Oversee day-to-day operations ensuring efficiency in loan processing."
    ],
    [
        "id" => 5,
        "title" => "Marketing Manager",
        "department" => "marketing",
        "location" => "100% Remote",
        "type" => "Full Time",
        "description" => "Plan and execute marketing campaigns to grow business reach."
    ],
];


//---------------------------------------------
// SERVICES (Short Summary + Dedicated Service Page Data)
//---------------------------------------------
$services = [
    [
        'id' => 1,
        'name' => 'Personal Loans',
        'icon' => 'flaticon-user',
        'short_desc' => 'Flexible personal loan solutions for all your needs.',
        'image' => 'assets/images/services/personal-loan.jpg',
        'page_content' => [
            'banner_title' => 'Personal Loans',
            'long_desc' => 'Get instant personal loan assistance with quick approvals, minimal documentation, and flexible repayment options.',
            'features' => [
                'Instant approval support',
                'Low documentation',
                'Flexible EMI options',
                'Multiple lender comparisons'
            ]
        ]
    ],

    [
        'id' => 2,
        'name' => 'Business Loans',
        'icon' => 'flaticon-business',
        'short_desc' => 'Fuel your business growth with tailored financing solutions.',
        'image' => 'assets/images/services/business-loan.jpg',
        'page_content' => [
            'banner_title' => 'Business Loans',
            'long_desc' => 'We provide business loan assistance for startups, SMEs, and enterprises through top lenders and NBFCs.',
            'features' => [
                'Secured & unsecured options',
                'Fast processing',
                'Working capital support',
                'Best lender matching'
            ]
        ]
    ],

    [
        'id' => 3,
        'name' => 'Mortgage Loans',
        'icon' => 'flaticon-home',
        'short_desc' => 'Get financial support by leveraging your property assets.',
        'image' => 'assets/images/services/mortgage-loan.jpg',
        'page_content' => [
            'banner_title' => 'Mortgage Loans',
            'long_desc' => 'Use your commercial or residential property to secure high-value loans with competitive interest rates.',
            'features' => [
                'High-value loan limit',
                'Low interest rates',
                'Quick valuation process',
                'End-to-end documentation support'
            ]
        ]
    ],

    [
        'id' => 4,
        'name' => 'Emergency Loans',
        'icon' => 'flaticon-alarm',
        'short_desc' => 'Urgent financial help with quick emergency loan processing.',
        'image' => 'assets/images/services/emergency-loan.jpg',
        'page_content' => [
            'banner_title' => 'Emergency Loans',
            'long_desc' => 'For medical, personal, or urgent needs, get rapid assistance to secure emergency funding.',
            'features' => [
                'Instant approval support',
                '24/7 processing assistance',
                'Zero collateral options',
                'Fastest turnaround time'
            ]
        ]
    ],

    [
        'id' => 5,
        'name' => 'Student Loans',
        'icon' => 'flaticon-graduation-cap',
        'short_desc' => 'Education loan guidance for local and international studies.',
        'image' => 'assets/images/services/student-loan.jpg',
        'page_content' => [
            'banner_title' => 'Student Loans',
            'long_desc' => 'We help students achieve their dreams by connecting them with the best education loan providers.',
            'features' => [
                'Low interest rates',
                'Study abroad loan support',
                'Flexible repayment periods',
                'Co-applicant assistance'
            ]
        ]
    ],

    [
        'id' => 6,
        'name' => 'Small Business Loans',
        'icon' => 'flaticon-briefcase',
        'short_desc' => 'Affordable funding options for small and micro businesses.',
        'image' => 'assets/images/services/small-business-loan.jpg',
        'page_content' => [
            'banner_title' => 'Small Business Loans',
            'long_desc' => 'Perfect for MSMEs, this loan category helps small businesses scale operations and increase profitability.',
            'features' => [
                'Quick approval',
                'Collateral-free options',
                'Working capital loans',
                'Low processing charges'
            ]
        ]
    ]
];





?>