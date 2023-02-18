<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
    protected $table='course';
    protected $fillable = [
        'organisation_id',
        'name',
        'url',
        'full_title',
        'is_scorm',
        'is_scorm_new',
        'require_marking',
        'complete_in_order',
        'show_outline',
        'show_outline_shared',
        'course_outline',
        'image',
        'nominal_hours',
        'vet_flag',
        'field_of_education_identifier',
        'field_of_education_identifier',
        'url'
    ];


    use HasFactory;

    public $delivery_modes = [
        "YNN" => "Internal only (e.g. classroom-based)",
        "NYN" => "External only (e.g. online)",
        "NNY" => "Workplace-based only",
        "YYN" => "Combination of internal and external",
        "YNY" => "Combination of internal and workplace-based",
        "NYY" => "Combination of external and workplace-based",
        "YYY" => "Combination of all modes",
        "NNN" => "not applicablt (RPL or credit transfer)",
    ];


    public $field_of_education_identifiers = [
        "010101" => "010101 - Mathematics",
        "010103" => "010103 - Statistics",
        "010199" => "010199 - Mathematical Sciences, n.e.c.",
        "010301" => "010301 - Physics",
        "010303" => "010303 - Astronomy",
        "010501" => "010501 - Organic Chemistry",
        "010503" => "010503 - Inorganic Chemistry",
        "010599" => "010599 - Chemical Sciences, n.e.c.",
        "010701" => "010701 - Atmospheric Sciences",
        "010703" => "010703 - Geology",
        "010705" => "010705 - Geophysics",
        "010707" => "010707 - Geochemistry",
        "010709" => "010709 - Soil Science",
        "010711" => "010711 - Hydrology",
        "010713" => "010713 - Oceanography",
        "010799" => "010799 - Earth Sciences, n.e.c.",
        "010901" => "010901 - Biochemistry and Cell Biology",
        "010903" => "010903 - Botany",
        "010905" => "010905 - Ecology and Evolution",
        "010907" => "010907 - Marine Science",
        "010909" => "010909 - Genetics",
        "010911" => "010911 - Microbiology",
        "010913" => "010913 - Human Biology",
        "010915" => "010915 - Zoology",
        "010999" => "010999 - Biological Sciences, n.e.c.",
        "019901" => "019901 - Medical Science",
        "019903" => "019903 - Forensic Science",
        "019905" => "019905 - Food Science and Biotechnology",
        "019907" => "019907 - Pharmacology",
        "019909" => "019909 - Laboratory Technology",
        "019999" => "019999 - Natural and Physical Sciences, n.e.c.",
        "020101" => "020101 - Formal Language Theory",
        "020103" => "020103 - Programming",
        "020105" => "020105 - Computational Theory",
        "020107" => "020107 - Compiler Construction",
        "020109" => "020109 - Algorithms",
        "020111" => "020111 - Data Structures",
        "020113" => "020113 - Networks and Communications",
        "020115" => "020115 - Computer Graphics",
        "020117" => "020117 - Operating Systems",
        "020119" => "020119 - Artificial Intelligence",
        "020199" => "020199 - Computer Science, n.e.c.",
        "020301" => "020301 - Conceptual Modelling",
        "020303" => "020303 - Database Management",
        "020305" => "020305 - Systems Analysis and Design",
        "020307" => "020307 - Decision Support Systems",
        "020399" => "020399 - Information Systems, n.e.c.",
        "029901" => "029901 - Security Science",
        "029999" => "029999 - Information Technology, n.e.c.",
        "030101" => "030101 - Manufacturing Engineering",
        "030103" => "030103 - Printing",
        "030105" => "030105 - Textile Making",
        "030107" => "030107 - Garment Making",
        "030109" => "030109 - Footwear Making",
        "030111" => "030111 - Wood Machining and Turning",
        "030113" => "030113 - Cabinet Making",
        "030115" => "030115 - Furniture Upholstery and Renovation",
        "030117" => "030117 - Furniture Polishing",
        "030199" => "030199 - Manufacturing Engineering and Technology, n.e.c.",
        "030301" => "030301 - Chemical Engineering",
        "030303" => "030303 - Mining Engineering",
        "030305" => "030305 - Materials Engineering",
        "030307" => "030307 - Food Processing Technology",
        "030399" => "030399 - Process and Resources Engineering, n.e.c.",
        "030399" => "030399 - Process and Resources Engineering, n.e.c.",
        "030501" => "030501 - Automotive Engineering",
        "030503" => "030503 - Vehicle Mechanics",
        "030505" => "030505 - Automotive Electrics and Electronics",
        "030507" => "030507 - Automotive Vehicle Refinishing",
        "030509" => "030509 - Automotive Body Construction",
        "030511" => "030511 - Panel Beating",
        "030513" => "030513 - Upholstery and Vehicle Trimming",
        "030515" => "030515 - Automotive Vehicle Operations",
        "030599" => "030599 - Automotive Engineering and Technology, n.e.c.",
        "030701" => "030701 - Mechanical Engineering",
        "030703" => "030703 - Industrial Engineering",
        "030705" => "030705 - Toolmaking",
        "030707" => "030707 - Metal Fitting, Turning and Machining",
        "030709" => "030709 - Sheetmetal Working",
        "030711" => "030711 - Boilermaking and Welding",
        "030713" => "030713 - Metal Casting and Patternmaking",
        "030715" => "030715 - Precision Metalworking",
        "030717" => "030717 - Plant and Machine Operations",
        "030799" => "030799 - Mechanical and Industrial Engineering and Technology, n.e.c.",
        "030901" => "030901 - Construction Engineering",
        "030903" => "030903 - Structural Engineering",
        "030905" => "030905 - Building Services Engineering",
        "030907" => "030907 - Water and Sanitary Engineering",
        "030909" => "030909 - Transport Engineering",
        "030911" => "030911 - Geotechnical Engineering",
        "030913" => "030913 - Ocean Engineering",
        "030999" => "030999 - Civil Engineering, n.e.c.",
        "031101" => "031101 - Surveying",
        "031103" => "031103 - Mapping Science",
        "031199" => "031199 - Geomatic Engineering, n.e.c.",
        "031301" => "031301 - Electrical Engineering",
        "031303" => "031303 - Electronic Engineering",
        "031305" => "031305 - Computer Engineering",
        "031307" => "031307 - Communications Technologies",
        "031309" => "031309 - Communications Equipment Installation and Maintenance",
        "031311" => "031311 - Powerline Installation and Maintenance",
        "031313" => "031313 - Electrical Fitting, Electrical Mechanics",
        "031315" => "031315 - Refrigeration and Air Conditioning Mechanics",
        "031317" => "031317 - Electronic Equipment Servicing",
        "031399" => "031399 - Electrical and Electronic Engineering and Technology, n.e.c.",
        "031501" => "031501 - Aerospace Engineering",
        "031503" => "031503 - Aircraft Maintenance Engineering",
        "031505" => "031505 - Aircraft Operation",
        "031507" => "031507 - Air Traffic Control",
        "031599" => "031599 - Aerospace Engineering and Technology, n.e.c.",
        "031701" => "031701 - Maritime Engineering",
        "031703" => "031703 - Marine Construction",
        "031705" => "031705 - Marine Craft Operation",
        "031799" => "031799 - Maritime Engineering and Technology, n.e.c.",
        "039901" => "039901 - Environmental Engineering",
        "039903" => "039903 - Biomedical Engineering",
        "039905" => "039905 - Fire Technology",
        "039907" => "039907 - Rail Operations",
        "039909" => "039909 - Cleaning",
        "039999" => "039999 - Engineering and Related Technologies, n.e.c.",
        "040101" => "040101 - Architecture",
        "040103" => "040103 - Urban Design and Regional Planning",
        "040105" => "040105 - Landscape Architecture",
        "040107" => "040107 - Interior and Environmental Design",
        "040199" => "040199 - Architecture and Urban Environment, n.e.c.",
        "040301" => "040301 - Building Science and Technology",
        "040303" => "040303 - Building Construction Management",
        "040305" => "040305 - Building Surveying",
        "040307" => "040307 - Building Construction Economics",
        "040309" => "040309 - Bricklaying and Stonemasonry",
        "040311" => "040311 - Carpentry and Joinery",
        "040313" => "040313 - Ceiling, Wall and Floor Fixing",
        "040315" => "040315 - Roof Fixing",
        "040317" => "040317 - Plastering",
        "040319" => "040319 - Furnishing Installation",
        "040321" => "040321 - Floor Coverings",
        "040323" => "040323 - Glazing",
        "040325" => "040325 - Painting, Decorating and Sign Writing",
        "040327" => "040327 - Plumbing",
        "040329" => "040329 - Scaffolding and Rigging",
        "040399" => "040399 - Building, n.e.c.",
        "050101" => "050101 - Agricultural Science",
        "050103" => "050103 - Wool Science",
        "050105" => "050105 - Animal Husbandry",
        "050199" => "050199 - Agriculture, n.e.c.",
        "050301" => "050301 - Horticulture",
        "050303" => "050303 - Viticulture",
        "050501" => "050501 - Forestry Studies",
        "050701" => "050701 - Aquaculture",
        "050799" => "050799 - Fisheries Studies, n.e.c.",
        "050901" => "050901 - Land, Parks and Wildlife Management",
        "050999" => "050999 - Environmental Studies, n.e.c.",
        "059901" => "059901 - Pest and Weed Control",
        "059999" => "059999 - Agriculture, Environmental and Related Studies, n.e.c.",
        "060101" => "060101 - General Medicine",
        "060103" => "060103 - Surgery",
        "060105" => "060105 - Psychiatry",
        "060107" => "060107 - Obstetrics and Gynaecology",
        "060109" => "060109 - Paediatrics",
        "060111" => "060111 - Anaesthesiology",
        "060113" => "060113 - Pathology",
        "060115" => "060115 - Radiology",
        "060117" => "060117 - Internal Medicine",
        "060119" => "060119 - General Practice",
        "060199" => "060199 - Medical Studies, n.e.c.",
        "060301" => "060301 - General Nursing",
        "060303" => "060303 - Midwifery",
        "060305" => "060305 - Mental Health Nursing",
        "060307" => "060307 - Community Nursing",
        "060309" => "060309 - Critical Care Nursing",
        "060311" => "060311 - Aged Care Nursing",
        "060313" => "060313 - Palliative Care Nursing",
        "060315" => "060315 - Mothercraft Nursing and Family and Child Health Nursing",
        "060399" => "060399 - Nursing, n.e.c.",
        "060501" => "060501 - Pharmacy",
        "060701" => "060701 - Dentistry",
        "060703" => "060703 - Dental Assisting",
        "060705" => "060705 - Dental Technology",
        "060799" => "060799 - Dental Studies, n.e.c.",
        "060901" => "060901 - Optometry",
        "060903" => "060903 - Optical Technology",
        "060999" => "060999 - Optical Science, n.e.c.",
        "061101" => "061101 - Veterinary Science",
        "061103" => "061103 - Veterinary Assisting",
        "061199" => "061199 - Veterinary Studies, n.e.c.",
        "061301" => "061301 - Occupational Health and Safety",
        "061303" => "061303 - Environmental Health",
        "061305" => "061305 - Indigenous Health",
        "061307" => "061307 - Health Promotion",
        "061309" => "061309 - Community Health",
        "061311" => "061311 - Epidemiology",
        "061399" => "061399 - Public Health, n.e.c.",
        "061501" => "061501 - Radiography",
        "061701" => "061701 - Physiotherapy",
        "061703" => "061703 - Occupational Therapy",
        "061705" => "061705 - Chiropractic and Osteopathy",
        "061707" => "061707 - Speech Pathology",
        "061709" => "061709 - Audiology",
        "061711" => "061711 - Massage Therapy",
        "061713" => "061713 - Podiatry",
        "061799" => "061799 - Rehabilitation Therapies, n.e.c.",
        "061901" => "061901 - Naturopathy",
        "061903" => "061903 - Acupuncture",
        "061905" => "061905 - Traditional Chinese Medicine",
        "061999" => "061999 - Complementary Therapies, n.e.c.",
        "069901" => "069901 - Nutrition and Dietetics",
        "069903" => "069903 - Human Movement",
        "069905" => "069905 - Paramedical Studies",
        "069907" => "069907 - First Aid",
        "069999" => "069999 - Health, n.e.c.",
        "070101" => "070101 - Teacher Education: Early Childhood",
        "070103" => "070103 - Teacher Education: Primary",
        "070105" => "070105 - Teacher Education: Secondary",
        "070107" => "070107 - Teacher-Librarianship",
        "070109" => "070109 - Teacher Education: Vocational Education and Training",
        "070111" => "070111 - Teacher Education: Higher Education",
        "070113" => "070113 - Teacher Education: Special Education",
        "070115" => "070115 - English as a Second Language Teaching",
        "070117" => "070117 - Nursing Education Teacher Training",
        "070199" => "070199 - Teacher Education, n.e.c.",
        "070301" => "070301 - Curriculum Studies",
        "070303" => "070303 - Education Studies",
        "079999" => "079999 - Education, n.e.c.",
        "080101" => "080101 - Accounting",
        "080301" => "080301 - Business Management",
        "080303" => "080303 - Human Resource Management",
        "080305" => "080305 - Personal Management Training",
        "080307" => "080307 - Organisation Management",
        "080309" => "080309 - Industrial Relations",
        "080311" => "080311 - International Business",
        "080313" => "080313 - Public and Health Care Administration",
        "080315" => "080315 - Project Management",
        "080317" => "080317 - Quality Management",
        "080319" => "080319 - Hospitality Management",
        "080321" => "080321 - Farm Management and Agribusiness",
        "080323" => "080323 - Tourism Management",
        "080399" => "080399 - Business and Management, n.e.c.",
        "080501" => "080501 - Sales",
        "080503" => "080503 - Real Estate",
        "080505" => "080505 - Marketing",
        "080507" => "080507 - Advertising",
        "080509" => "080509 - Public Relations",
        "080599" => "080599 - Sales and Marketing, n.e.c.",
        "080701" => "080701 - Tourism",
        "080901" => "080901 - Secretarial and Clerical Studies",
        "080903" => "080903 - Keyboard Skills",
        "080905" => "080905 - Practical Computing Skills",
        "080999" => "080999 - Office Studies, n.e.c.",
        "081101" => "081101 - Banking and Finance",
        "081103" => "081103 - Insurance and Actuarial Studies",
        "081105" => "081105 - Investment and Securities",
        "081199" => "081199 - Banking, Finance and Related Fields, n.e.c.",
        "089901" => "089901 - Purchasing, Warehousing and Distribution",
        "089903" => "089903 - Valuation",
        "089999" => "089999 - Management and Commerce, n.e.c.",
        "090101" => "090101 - Political Science",
        "090103" => "090103 - Policy Studies",
        "090301" => "090301 - Sociology",
        "090303" => "090303 - Anthropology",
        "090305" => "090305 - History",
        "090307" => "090307 - Archaeology",
        "090309" => "090309 - Human Geography",
        "090311" => "090311 - Indigenous Studies",
        "090313" => "090313 - Gender Specific Studies",
        "090399" => "090399 - Studies in Human Society, n.e.c.",
        "090501" => "090501 - Social Work",
        "090503" => "090503 - Children’s Services",
        "090505" => "090505 - Youth Work",
        "090507" => "090507 - Care for the Aged",
        "090509" => "090509 - Care for the Disabled",
        "090511" => "090511 - Residential Client Care",
        "090513" => "090513 - Counselling",
        "090515" => "090515 - Welfare Studies",
        "090599" => "090599 - Human Welfare Studies and Services, n.e.c.",
        "090701" => "090701 - Psychology",
        "090799" => "090799 - Behavioural Science, n.e.c.",
        "090901" => "090901 - Business and Commercial Law",
        "090903" => "090903 - Constitutional Law",
        "090905" => "090905 - Criminal Law",
        "090907" => "090907 - Family Law",
        "090909" => "090909 - International Law",
        "090911" => "090911 - Taxation Law",
        "090913" => "090913 - Legal Practice",
        "090999" => "090999 - Law, n.e.c.",
        "091101" => "091101 - Justice Administration",
        "091103" => "091103 - Legal Studies",
        "091105" => "091105 - Police Studies",
        "091199" => "091199 - Justice and Law Enforcement, n.e.c.",
        "091301" => "091301 - Librarianship and Information Management",
        "091303" => "091303 - Curatorial Studies",
        "091501" => "091501 - English Language",
        "091503" => "091503 - Northern European Languages",
        "091505" => "091505 - Southern European Languages",
        "091507" => "091507 - Eastern European Languages",
        "091509" => "091509 - Southwest Asian and North African Languages",
        "091511" => "091511 - Southern Asian Languages",
        "091513" => "091513 - Southeast Asian Languages",
        "091515" => "091515 - Eastern Asian Languages",
        "091517" => "091517 - Australian Indigenous Languages",
        "091519" => "091519 - Translating and Interpreting",
        "091521" => "091521 - Linguistics",
        "091523" => "091523 - Literature",
        "091599" => "091599 - Language and Literature, n.e.c.",
        "091701" => "091701 - Philosophy",
        "091703" => "091703 - Religious Studies",
        "091901" => "091901 - Economics",
        "091903" => "091903 - Econometrics",
        "092101" => "092101 - Sport and Recreation Activities",
        "092103" => "092103 - Sports Coaching, Officiating and Instruction",
        "092199" => "092199 - Sport and Recreation, n.e.c.",
        "099901" => "099901 - Family and Consumer Studies",
        "099903" => "099903 - Criminology",
        "099905" => "099905 - Security Services",
        "099999" => "099999 - Society and Culture, n.e.c.",
        "100101" => "100101 - Music",
        "100103" => "100103 - Drama and Theatre Studies",
        "100105" => "100105 - Dance",
        "100199" => "100199 - Performing Arts, n.e.c.",
        "100301" => "100301 - Fine Arts",
        "100303" => "100303 - Photography",
        "100305" => "100305 - Crafts",
        "100307" => "100307 - Jewellery Making",
        "100309" => "100309 - Floristry",
        "100399" => "100399 - Visual Arts and Crafts, n.e.c.",
        "100501" => "100501 - Graphic Arts and Design Studies",
        "100503" => "100503 - Textile Design",
        "100505" => "100505 - Fashion Design",
        "100599" => "100599 - Graphic and Design Studies, n.e.c.",
        "100701" => "100701 - Audio Visual Studies",
        "100703" => "100703 - Journalism",
        "100705" => "100705 - Written Communication",
        "100707" => "100707 - Verbal Communication",
        "100799" => "100799 - Communication and Media Studies, n.e.c.",
        "109999" => "109999 - Creative Arts, n.e.c.",
        "110101" => "110101 - Hospitality",
        "110103" => "110103 - Food and Beverage Service",
        "110105" => "110105 - Butchery",
        "110107" => "110107 - Baking and Pastrymaking",
        "110109" => "110109 - Cookery",
        "110111" => "110111 - Food Hygiene",
        "110199" => "110199 - Food and Hospitality, n.e.c.",
        "110301" => "110301 - Beauty Therapy",
        "110303" => "110303 - Hairdressing",
        "110399" => "110399 - Personal Services, n.e.c.",
        "120101" => "120101 - General Primary and Secondary Education Programmes",
        "120103" => "120103 - Literacy and Numeracy Programmes",
        "120105" => "120105 - Learning Skills Programmes",
        "120199" => "120199 - General Education Programmes, n.e.c.",
        "120301" => "120301 - Social and Interpersonal Skills Programmes",
        "120303" => "120303 - Survival Skills Programmes",
        "120305" => "120305 - Parental Education Programmes",
        "120399" => "120399 - Social Skills Programmes, n.e.c.",
        "120501" => "120501 - Career Development Programmes",
        "120503" => "120503 - Job Search Skills Programmes",
        "120505" => "120505 - Work Practices Programmes",
        "120599" => "120599 - Employment Skills Programmes, n.e.c.",
        "129999" => "129999 - Mixed Field Programmes, n.e.c.",
    ];
    protected $appends = ['action'];
    public function getActionAttribute()
    {
        if(!empty($this->id)){

            return '<a href="'.route('lms.course.edit',$this->id).'"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
            <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
            </svg>
            </a>';
        } else {
            return false;
        }
    }

    public function coursesetting()
    {
        return $this->hasOne(CourseSetting::class);
    }

}