<?php

function sendEmail(){
	
	$subject = 'Re: Background Check FORM from GTA' ;
	$message = "Hi Fre

Let me know if you got Interview  feedback from client side

Thanks

On Fri, 27 Jan 2023 at 16:02, Fre Gebrieal <fgebrieal@ledgent.com> wrote: > Hi Arun,
>
>
>
> Thank you. Is this for your current position?
>
>
>
> Best Regards,
>
> *Fre Gebrieal | Technical Recruiter *
>
> *Roth Staffing Companies, L.P. *
>
> Ledgent Technology
>
> *Direct*: *571.895.2486* | email: fgebrieal@ledgent.com
>
> *Our Purpose: To make life better for the people we serve. *
>
>
>
> *From:* Arun Fnu <arunfnu0802@gmail.com>
> *Sent:* Friday, January 27, 2023 3:42 PM
> *To:* Fre Gebrieal <fgebrieal@ledgent.com>
> *Subject:* Re: Ledgent Technology- Follow Up
>
>
>
> Please use these points.
>
> Used CICS for Transferring execution and data between programs.
> Used CICS for setting up security and ensuring the integrity of data.
> Worked with CICS Services for accessing data in databases and mainframe
> data sets.
>
>
>
> On Fri, 27 Jan 2023 at 14:24, Fre Gebrieal <fgebrieal@ledgent.com> wrote:
>
> You=E2=80=99re absolutely welcome.
>
>
>
> You mentioned to me you have experience with CICS transformation, can you
> please share with me two or three bullet points with you CICS
> transformation?
>
>    -
>    -
>    -
>
>
>
> I want to add that to your resume.
>
>
>
> Best Regards,
>
> *Fre Gebrieal | Technical Recruiter *
>
> *Roth Staffing Companies, L.P. *
>
> Ledgent Technology
>
> *Direct*: *571.895.2486* | email: fgebrieal@ledgent.com
>
> *Our Purpose: To make life better for the people we serve. *
>
>
>
> *From:* Arun Fnu <arunfnu0802@gmail.com>
> *Sent:* Friday, January 27, 2023 1:40 PM
> *To:* Fre Gebrieal <fgebrieal@ledgent.com>
> *Subject:* Re: Ledgent Technology- Follow Up
>
>
>
> Hey Fre,
>
>
>
> It was nice talking to you too and thanks for the JD.
>
> Thanks & Regards
>
> Arun Fnu
>
>
>
> On Fri, 27 Jan 2023 at 13:05, Fre Gebrieal <fgebrieal@ledgent.com> wrote:
>
> Hi Arun,
>
>
>
> It was an absolute pleasure speaking with you regarding the Sr. F/S Java
> Developer position with Skytech Consultancy. Please find below more
> information about the company and please find attached the job descriptio=
n.
>
>
>
> *About Skytech Consultancy Services:*
>
> Skytech Consultancy Services is a fast-growing 8 (a) certified Informatio=
n
> Technology solutions and consulting services company providing wide range
> of IT services to enterprises across various domains.
>
>
>
> We are proud to support clients in the commercial, government, and health
> sectors. Our flexible, scalable solutions are designed to empower
> organizations from different verticals with various needs to meet
> ever-evolving demand of technology solutions which include:
>
>    - Reference Implementations, Integration Solutions and Pilots
>    - Solutions from amalgamation of open-source software tools and
>    utilities
>    - Artificial Intelligence (AI) Tools and Process Implementation
>    - Healthcare IT Interoperability Standards & Specifications
>
>
>
> *Website*: https://www.skytechconsultancy.com/
>
> *Industry*: IT Services and IT Consulting
>
> *Company size*: 11-50 employees
>
> *Headquarters*: Towson, Maryland
>
> *Founded*: 2018
> *Specialties*: Reference Implementations, Integration Solutions and
> Pilots, Solutions from amalgamation of open-source software tools and
> utilities, Artificial Intelligence (AI) Tools and Process Implementation,
> Healthcare IT Interoperability Standards & Specifications
>
>
>
> *About the position**:*
> *Title*: Sr. F/S Java Developer
> *Location*: 100% Remote
> *Type*: Contract to Hire
> *Salary*: $145,600
> *Hourly:* $70/hr.
>
> The next step of the process is for us to meet virtually on *Tuesday Jan.
> 31st at 12:00PM EST.* I=E2=80=99ve sent you an MS Teams Invite, please ac=
cept.
>
> I will present your resume to Chris Brown, Branch Manager of Ledgent
> Technology, if he has any questions, he will reach out to you. If not, we
> will present your resume to the hiring manager, and I will follow up with
> you with updates as I receive them.
>
> If you have any questions, concerns, or updates, please feel free to reac=
h
> out to me.
>
>
>
> I look forward to working with you and partnering with you throughout you=
r
> job-search journey and beyond.
>
>
>
> Best Regards,
>
>
>
> [image: Roth Staffing Companies, L.P.] <http://www.rothstaffing.com/>
>
>
>
> [image: Roth Staffing Companies, L.P.]
> <http://www.facebook.com/RothStaffing>[image: Roth Staffing Companies,
> L.P.] <https://twitter.com/rothstaffing>[image: Roth Staffing Companies,
> L.P.] <https://www.linkedin.com/company/298409>
>
>
>
>
>
>
>
> *Fre Gebrieal | Technical Recruiter *
>
>
>
> Ledgent Technonogy, a Roth Staffing Company
>
>
>
> Ultimate Staffing <http://www.ultimatestaffing.com/> | Ledgent
> <http://www.ledgent.com/> | Ledgent Technology
> <http://www.ledgenttech.com/> | Adams & Martin Group
> <http://www.adamsmartingroup.com/> | About Talent
> <http://www.abouttalent.com/>
>
>
>
> Direct Line: 571.895.2486 | Email: fgebrieal@ledgent.com
>
> *Our Purpose: To make life better for the people we serve. *
>
> [image: Proud to be the best]
>
>
>
>
>
>";
  	$to = "eshu.1505@gmail.com";

	$headers = 'From: Fab Gabriel <fgebrieal@ledgent.com>' . PHP_EOL ;
	$result = mail ( $to, $subject, $message, $headers ) ;
  	return $result;

}

sendEmail();

?>