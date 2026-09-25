<?php
declare(strict_types=1);

$event = [
    'name' => 'International Sports Science & Human Performance Conclave 2026',
    'subtitle' => 'National Conclave on Clean Sport, Performance Technology, Research & Innovation',
    'date' => '25–26 November 2026',
    'venue' => 'Woxsen University',
    'location' => 'Hyderabad, India',
    'theme' => 'Fuel. Measure. Innovate. Perform Clean.',
    'registration_url' => 'https://forms.gle/1YKTpZzzGspR5i887',
    'map_url' => 'https://www.google.com/maps/search/?api=1&query=Woxsen+University+Hyderabad',
];

$partners = [
    ['name' => 'Woxsen University', 'status' => 'Organised by', 'logo' => 'assets/images/logos/woxsen.png'],
    ['name' => 'Physical Education Foundation of India', 'status' => 'In Collaboration', 'logo' => 'assets/images/logos/pefi.png'],
    ['name' => 'National Anti-Doping Agency', 'status' => 'In Collaboration', 'logo' => 'assets/images/logos/nada.png'],
    ['name' => 'India Australia Sports Bridge', 'status' => 'In Collaboration', 'logo' => 'assets/images/logos/india-australia-sports-bridge.png'],
];

$tracks = [
    ['title'=>'Sports Nutrition & Anti-Doping Awareness','label'=>'FUEL RIGHT. COMPETE CLEAN.','description'=>'Evidence-based nutrition and ethical sport, in collaboration with PEFI and NADA.','topics'=>['Sports nutrition fundamentals','Nutrition for performance and recovery','Supplement awareness','Anti-doping regulations','Prohibited substances and methods','Athlete responsibilities','Therapeutic Use Exemptions awareness','Clean sport principles','Ethics in competitive sport']],
    ['title'=>'Applied Surface EMG for Sports Performance','label'=>'HANDS-ON TECHNICAL MASTERCLASS','description'=>'Understand muscle activation and discover how electrical signals become performance insights.','topics'=>['Introduction to EMG','Muscle activation','Electrode placement concepts','Signal interpretation','Muscle recruitment patterns','Sports biomechanics applications','Strength and conditioning applications','Rehabilitation applications','Athlete movement assessment']],
    ['title'=>'Research Poster & Innovation Challenge','label'=>'NATIONAL RESEARCH PLATFORM','description'=>'Present emerging ideas, exchange perspectives and explore new possibilities for human performance.','topics'=>['Exercise physiology','Sports nutrition','Biomechanics','Injury prevention','Strength & conditioning','Sports psychology','Sports analytics','Artificial intelligence in sports','Wearable technology','Athlete monitoring','Sports management','Sports marketing','Human performance','Rehabilitation science']],
    ['title'=>'Sports Technology Demonstration Zone','label'=>'EXPERIENCE THE NEXT FRONTIER','description'=>'Get closer to the tools and technologies changing how we understand, measure and improve sport.','topics'=>['Wearables','EMG','Athlete monitoring','Motion analysis','Sports analytics dashboards','Artificial intelligence','Performance assessment','Recovery technology','Biomechanical assessment','Digital coaching tools']],
    ['title'=>'International Knowledge Exchange','label'=>'GLOBAL OUTREACH & PARTICIPATION','description'=>'Connect with international universities, researchers and sports organisations through cross-border knowledge exchange.','topics'=>['International university engagement','Global research exchange','Institutional collaboration','International expert participation','Sports-sector networking','Cross-border academic dialogue']],
];

$programme = [
    ['day'=>'Day 01','date'=>'25 November 2026','theme'=>'Nutrition · Anti-Doping · Clean Sport','sessions'=>['Registration, Inauguration & Opening Remarks','Keynote: The Future of Sports Science & Human Performance','Sports Nutrition for Training, Competition & Recovery','Anti-Doping Awareness: Rules, Responsibilities & Clean Sport','Supplements, Contamination Risks, Prohibited Substances & TUEs','Athlete Health, Ethics & Performance Case Discussions','Panel: Building a Clean & High-Performance Sporting Ecosystem','Athlete & Practitioner Interaction']],
    ['day'=>'Day 02','date'=>'26 November 2026','theme'=>'Human Performance · EMG · Research · Technology','sessions'=>['Noraxsen Sports Technology Masterclass','Humotion Human Movement & Performance Masterclass','Technology Demonstration Zone & Applied Performance Sessions','Research Poster Presentations','Student Innovation Challenge','Industry-Academia Panel & Collaboration Roundtable','Awards, Valedictory Session & Closing']],
];

$research = ['Human Performance & Exercise Physiology','Sports Nutrition & Clean Sport','Biomechanics & Injury Prevention','Sports Analytics, AI & Wearables','Sports Psychology & Athlete Development','Sports Management & Marketing','Strength & Conditioning','Rehabilitation & Sports Medicine Technologies'];
$audiences = ['B.Sc. Sports Science Students','Physical Education Students','Sports Management Students','Physiotherapy Students','Nutrition Students','Engineering & Biomedical Students','Research Scholars','Faculty Members','Strength & Conditioning Professionals','Sports Coaches','Fitness Professionals','Athletes','Sports Analysts','Sports Technology Professionals','Healthcare & Rehabilitation Professionals'];
$gains = ['Practical sports nutrition knowledge','Anti-doping awareness','Understanding of clean sport principles','Introduction to EMG technology','Sports performance assessment exposure','Research presentation experience','Interaction with domain experts','Sports technology exposure','Interdisciplinary networking','Participation / workshop certification as applicable'];

$registration = [
    ['name'=>'Student Conclave Pass','fee'=>'₹1,499','details'=>'Two-day general sessions, research sessions, expo access, food and certificate.'],
    ['name'=>'Research Scholar','fee'=>'₹1,999','details'=>'Full conclave access, food and research presentation eligibility.'],
    ['name'=>'Faculty / Coach / Professional','fee'=>'₹1,999','details'=>'Full conclave access, food and professional sessions.'],
    ['name'=>'Paper / Poster / Innovation Entry','fee'=>'₹999 per team','details'=>'Entry for two authors, abstract review, food and award eligibility.'],
    ['name'=>'Woxsen Sports Science Students','fee'=>'Complimentary','details'=>'Subject to institutional approval and seat capacity.'],
];

$faqs = [
    ['Who can participate in the conclave?','Students, research scholars, faculty, coaches, athletes, sports scientists, technology professionals and healthcare and rehabilitation professionals are invited.'],
    ['Can students from other universities participate?','Yes. The conclave welcomes national participation, including students from other universities.'],
    ['Can research scholars submit posters?','Yes. Research scholars can take part in the National Sports Science Research Poster & Innovation Challenge. Guidelines and important dates will be announced shortly.'],
    ['Is the EMG workshop suitable for beginners?','The masterclass introduces surface EMG concepts, including muscle activation and signal interpretation. Detailed prerequisites will be communicated to registered participants.'],
    ['Can faculty members and coaches attend?','Yes. Faculty members, coaches and performance professionals are invited to participate.'],
    ['Are certificates provided?','Participation / workshop certification is planned as applicable. Details will be communicated to registered participants. Certificates from NADA or PEFI are not confirmed.'],
    ['Is accommodation available?','Details will be communicated to registered participants.'],
    ['How can institutions send a student group?','Use the main registration form and select the relevant participation category. Details will be communicated to registered participants.'],
    ['Can companies showcase sports technology?','Yes. Organisations can register interest in technology demonstrations, knowledge exchange, expert sessions and research collaboration through the main registration form.'],
    ['How do I submit a research poster?','Use Submit Poster Abstract when submissions open. Submission guidelines and important dates will be announced shortly.'],
    ['How do I contact the organising team?','Coordinator, email and phone details will be published here when confirmed. Participation requests can be submitted through the main registration form.'],
];

function e(string $value): string { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
?>

