# Acacia Secondary School

Created in 2019.

A Laravel 8 site for Acacia Secondary School and Vocational Training Centre, a co-educational boarding school in Mlandizi, Kibaha, Tanzania (Reg. No. S. 3588). The school was founded by the Board of Directors of Partners in Development (PID). The motto on the home page is “Winners never give up.”

The public pages are static Blade views returned directly from `routes/web.php`. Home introduces the school, the motto, and news links. About covers the vision, mission, aims, and administration. Curriculum is at `/curriculam`. Admissions lists the subjects offered. Application forms links to the O-level and A-level PDF packs, joining instructions, and the medical form. Campus describes the grounds, staff, dormitories, library, sports, and transport. Student care covers teaching staff, dormitories, discipline, and the school menu. Gallery shows the chemistry laboratory and the campus. Contact is a message to the school manager.

The layout is `resources/views/master.blade.php`. Styling is `public/css/style.css`, photos are in `public/images`, and the downloadable forms are in `public/files`. The pages do not read or write a database. A few extra routes (`/students`, `/form1`, `/form4`, `/form5`, `/formGeneral`) point at views that are not in the project. `/any` only prints that the site is under construction.
