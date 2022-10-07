<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DocumentType;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = [
            ['department_name' => 'Memorandum'],
            ['department_name' => 'Notice of Meeting'],
            ['department_name' => 'Document Development Process'],
            ['department_name' => 'Communication Letter'],
            ['department_name' => 'Summary of Ratings - Teaching Demo'],
            ['department_name' => 'Travel Order'],
            ['department_name' => 'Announcement'],
            ['department_name' => 'Logbook'],
            ['department_name' => 'Letter'],
            ['department_name' => 'Waiver'],
        
            ['department_name' => 'SSC Plans and Programs	'],
            ['department_name' => 'Summary of Contracts'],
            ['department_name' => 'Infographics'],
            ['department_name' => 'Salary Scale'],
            ['department_name' => 'Time Keeping	  '],
            ['department_name' => 'Certificate of Awards (1st Quarter)'],
            ['department_name' => 'Report'],
            ['department_name' => 'SSC and SSG Plans and Programs'],
            ['department_name' => 'Payroll Computation'],
            ['department_name' => 'Student Handbook'],
        
            ['department_name' => 'Class Audit'],
            ['department_name' => 'Certification'],
            ['department_name' => 'Incident Report'],
            ['department_name' => 'Solicitation Letter'],
            ['department_name' => 'Statement of Account'],
            ['department_name' => 'Request for Allowance'],
            ['department_name' => 'Omnibus Certification'],
            ['department_name' => 'Verification Report'],
            ['department_name' => 'Proposed Rates for Thesis Defense'],
            ['department_name' => 'Request for Supplies'],
        
            ['department_name' => 'Career Development Plan'],
            ['department_name' => 'Contract (Full-time Employee)'],
            ['department_name' => 'Contract (Part-time Employee)'],
            ['department_name' => 'Review Program'],
            ['department_name' => 'Certificate of Employment'],
            ['department_name' => 'Memorandum of Agreement'],
            ['department_name' => 'Activity Proposal'],
            ['department_name' => 'Daily Time Record'],
            ['department_name' => 'Evaluation Form'],
            ['department_name' => 'OJT Individual Endorsement'],
        
            ['department_name' => 'OJT Group Endorsement'],
            ['department_name' => 'Action Plan'],
            ['department_name' => '2nd Grading Examination'],
            ['department_name' => 'Final Examination - 1st Semester'],
            ['department_name' => 'Voucher'],
            ['department_name' => 'Faculty Evaluation'],
            ['department_name' => 'Managerial Performance Evaluation Form'],
            ['department_name' => 'Personnel Performance Evaluation Form'],
            ['department_name' => 'Photocopy of Transcript of Records for Evaluation'],
            ['department_name' => 'Endorsement Letter'],
        
            ['department_name' => 'Designation Contract'],
            ['department_name' => 'Clearance'],
            ['department_name' => 'Certificate'],
            ['department_name' => 'List of ROTC Students'],
            ['department_name' => 'School History'],
            ['department_name' => 'List of Awardees Poster'],
            ['department_name' => 'Certificate of Awards'],
            ['department_name' => 'Certificate of Good Moral'],
            ['department_name' => 'Honorable Dismissal'],
            ['department_name' => 'Photocopy of Transcript of Records'],
        
            ['department_name' => 'Certification of Grades	'],
            ['department_name' => 'Certificate of Enrollment for Any Legal Purposes'],
            ['department_name' => 'Certificate of Enrollment for Scholarship'],
            ['department_name' => 'Certificate of Enrollment for Employment'],
            ['department_name' => 'Certificate of Enrollment for Entrance Examination'],
            ['department_name' => 'Certificate of Enrollment for Enrollment Purposes'],
            ['department_name' => 'Certificate of Enrollment for 4Ps'],
            ['department_name' => 'Official Transcript of Records'],
            ['department_name' => 'Form 137 Request'],
            ['department_name' => 'Letter of Explanation'],
        
            ['department_name' => 'Job Analysis Questionnaire'],
            ['department_name' => 'Poster'],
            ['department_name' => 'Program Design'],
            ['department_name' => 'Personnel Requisition Form'],
            ['department_name' => 'Report Card'],
            ['department_name' => 'Request Form'],
            ['department_name' => 'Application for Thesis Defense'],
            ['department_name' => 'Schools Philosophy, Mission, Vision, Goals and Objectives'],
            ['department_name' => 'Attendance Sheet'],
            ['department_name' => 'Booking Form'],
        
            ['department_name' => 'Student Admission Form - College'],
            ['department_name' => 'Application for Graduation'],
            ['department_name' => 'Promotional Report 1st Semester 2020-2021'],
            ['department_name' => 'Promotional Report 2nd Semester 2020-2021'],
            ['department_name' => 'Promotional Report Summer 2020-2021'],
            ['department_name' => 'Justification Letter for Submission of Late Promotional Report'],
            ['department_name' => 'Transmittal Letter 1st Semester 2020-2021'],
            ['department_name' => 'Transmittal Letter 2nd Semester 2020-2021'],
            ['department_name' => 'Transmittal Letter Summer 2020-2021'],
            ['department_name' => 'Summary of Students 1st Semester 2020-2021'],
        
            ['department_name' => 'Summary of Students 2nd Semester 2020-2021'],
            ['department_name' => 'Summary of Students Summer 2020-2021'],
            ['department_name' => '3rd Grading Examination'],
            ['department_name' => 'Midterm Examination - 2nd Semester'],
            ['department_name' => 'Enrollment Guidelines'],
            ['department_name' => 'Admin and Staff Library Attendance'],
            ['department_name' => 'Patron Application Logbook'],
            ['department_name' => 'Cataloging Dummy'],
            ['department_name' => 'Date Due Slip'],
            ['department_name' => 'Drive-Thru Book Borrowing Form'],
        
            ['department_name' => 'Book Returned Form'],
            ['department_name' => 'EMC Utilization Form'],
            ['department_name' => 'Library Card'],
            ['department_name' => 'Requisition Form'],
            ['department_name' => 'Students Daily Attendance'],
            ['department_name' => 'Teachers Daily Attendance'],
            ['department_name' => 'News Paper Clippings Form'],
            ['department_name' => 'Borrowers Card Logbook'],
            ['department_name' => 'Notice of Postponement'],
            ['department_name' => 'Certificate of Enrollment for UniFAST Scholarship Billing'],
        
            ['department_name' => 'Invitation Letter'],
            ['department_name' => 'Resolution'],
            ['department_name' => 'Probationary Employment Contract'],
            ['department_name' => 'Contract of Fulltime Probationary Teaching Employment'],
            ['department_name' => 'Designation Notification'],
            ['department_name' => 'Activity Plans and Programs for Sports and Fitness Development'],
            ['department_name' => 'Activity Plans and Programs for Socio-Cultural and Arts'],
            ['department_name' => 'SETP Copies and Comments'],
            ['department_name' => 'Constitution and By-Laws'],
            ['department_name' => 'Request Letter'],
        
            ['department_name' => 'Historical Data of Students Demographic Profile'],
            ['department_name' => 'Interview Result Endorsement'],
            ['department_name' => 'Certificate of Appreciation'],
            ['department_name' => 'Endorsement Letter'],
            ['department_name' => 'Class Loading Report'],
            ['department_name' => 'Job Offer'],
            ['department_name' => 'Module Evaluation Tool'],
            ['department_name' => 'Budget for Theses Final Oral Defense'],
            ['department_name' => 'Notice Release of SETP'],
            ['department_name' => 'Notice to Appear'],
        
            ['department_name' => '4th Grading Examination'],
            ['department_name' => 'Information'],
            ['department_name' => 'Final Examination, 2nd Semester'],
            ['department_name' => 'Training Endorsement'],
            ['department_name' => 'Program and Activities'],
            ['department_name' => 'Case Report Summary'],
            ['department_name' => 'Training Design'],
            ['department_name' => 'Minutes of the Meeting'],
            ['department_name' => 'Pre-Counseling Interview Form'],
            ['department_name' => 'Notice for the Conduct of Consultation Sessions'],
        
            ['department_name' => 'Summer Bridging Program Form'],
            ['department_name' => 'Personnel Selection Board Proposal'],
            ['department_name' => 'Certificate of Recognition'],
            ['department_name' => 'Uniform Design and Proposal'],
            ['department_name' => 'General Practice House Rules'],
            ['department_name' => 'Notice'],
            ['department_name' => 'Case Decision'],
            ['department_name' => 'Proposed Budget for Employees Night'],
            ['department_name' => 'Invitation for the Non-graduating Awardees'],
            ['department_name' => 'Consultancy Agreement Contract'],
        
            ['department_name' => 'Letter of Impeachment'],
            ['department_name' => 'Departmental Examination Schedule'],
            ['department_name' => 'Letter of Invitation'],
            ['department_name' => 'Moving Up and Graduation Programme'],
            ['department_name' => 'Reimbursement Letter'],
            ['department_name' => 'Notice for the Conduct of Mental Ability Test'],
            ['department_name' => 'Academic Calendar of Activities'],
            ['department_name' => 'Letter for Financial Assistance'],
            ['department_name' => 'Interview Notification'],
            ['department_name' => 'Safety and Security'],
        
            ['department_name' => 'Notice to Pullout'],
            ['department_name' => 'Notice: Start of Duty'],
            ['department_name' => 'Letter to Parents and Stakeholders'],
            ['department_name' => 'Form 138A'],
            ['department_name' => 'Project Based Contract'],
            ['department_name' => 'Application for Permission to Study'],
            ['department_name' => 'New Set of Administrators Endorsement'],
            ['department_name' => 'School Calendar'],
            ['department_name' => 'Excuse Letter'],
            ['department_name' => 'Activity Proposal for Intramurals'],
        
            ['department_name' => 'Activity Proposal for Financial Literacy Program Culminating Activity'],
            ['department_name' => 'Authenticated Copy from 201 File'],
            ['department_name' => 'Rules and Regulation'],
            ['department_name' => 'Waiver Liability Form'],
            ['department_name' => 'Liquidation Report'],
            ['department_name' => 'Budget Request'],
            ['department_name' => 'Otis-Lennon School Ability Test Score Record'],
            ['department_name' => 'Library Attendance'],
            ['department_name' => 'Internet Logbook'],
            ['department_name' => 'Credentials Request Form'],
        
            ['department_name' => 'Tarpaulin'],
            ['department_name' => 'Announcement'],
            ['department_name' => 'Parents Permit'],
            ['department_name' => 'Covid-19 Waiver, Release, and Assumption of Risk Form'],
            ['department_name' => 'Schedule for Pictorial'],
            ['department_name' => 'Recommendation'],
            ['department_name' => 'Contract of Fulltime Regular Teaching Employment'],
            ['department_name' => 'Contract of Employment'],
            ['department_name' => 'Personnel Requisition Form'],
            ['department_name' => 'Schedule of Activities'],
        
            ['department_name' => 'Policy Guidelines'],
            ['department_name' => 'Schedule of Biometric Registration'],
            ['department_name' => 'Intent Letter'],
            ['department_name' => 'Certificate of Candidacy'],
            ['department_name' => 'Academic Calendar of Activities S.Y. 2022-2023'],
            ['department_name' => 'Flag Raising Ceremony Assignment'],
            ['department_name' => 'Proposed Rates for Capstone Defense'],
            ['department_name' => 'Performance Appraisal System for Teachers'],
            ['department_name' => 'Student Evaluation of Teachers Performance'],
            ['department_name' => 'Training Evaluation Form'],
        
            ['department_name' => 'Presidential Discount Terms and Condition'],
            ['department_name' => 'Proposed Rates for Research Defense'],
            ['department_name' => 'Summary of Intent'],
            ['department_name' => 'Job Posting'],
            ['department_name' => 'Recommendation Letter'],
            ['department_name' => 'Contract of Lease'],
            ['department_name' => 'Certificate of Completion'],
            ['department_name' => 'List of Awardees'],
            ['department_name' => 'Flow Chart'],
            ['department_name' => 'Salary Scale - Basic Education Community Faculty'],
            ['department_name' => 'Post-Event Evaluation Form'],
        ];
        
        DocumentType::insert($department);
    }
}