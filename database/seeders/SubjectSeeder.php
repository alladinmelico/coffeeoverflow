<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Subject::create([
            'name' => 'Filipino',
            'description' => "Kaugnay nito, layunin ng pagtuturo ng Filipino na malinang ang (1) kakayahang komunikatibo, (2) replektibo / mapanuring pag-iisip at, (3) pagpapahalagang pampanitikan ng mga mag-aaral sa
            pamamagitan ng mga babasahin at teknolohiya tungo sa pagkakaroon ng pambansang pagkakakilanlan, kultural na literasi, at patuloy na pagkatuto upang makaagapay sa mabilis na pagbabagong nagaganap sa
            daigdig."
        ]);
        \App\Models\Subject::create([
            'name' => 'English',
            'description' => 'Language is the basis of all communication and the primary instrument of thought. Thinking, learning, and language are interrelated. Language is
            governed by rules and systems (language conventions) which are used to explore and communicate meaning. It defines culture which is essential in
            understanding oneself (personal identity), forming interpersonal relationships (socialization), extending experiences, reflecting on thought and action, and
            contributing to a better society. Language, therefore, is central to the peoples’ intellectual, social and emotional development and has an essential role in all key
            learning areas.'
        ]);
        \App\Models\Subject::create([
            'name' => 'Mathematics',
            'description' => 'Mathematics is one subject that pervades life at any age and in any circumstance. Thus, its value goes beyond the classroom and the school. Mathematics
            as a school subject, therefore, must be learned comprehensively and with much depth.
            The twin goals of mathematics in the basic education levels, K-10, are Critical Thinking and Problem Solving.
            Critical thinking, according to Scriven and Paul (1987) is the intellectually disciplined process of actively and skilfully conceptualizing, applying, analyzing,
            synthesizing, and/or evaluating information gathered from, or generated by, observation, experience, reflection, reasoning, or communication, as a guide to belief and action.
            On the other hand, according to Polya (1945 & 1962), mathematical problem solving is finding a way around a difficulty, around an obstacle, and finding a solution to a
            problem that is unknow'
        ]);
        \App\Models\Subject::create([
            'name' => 'Science',
            'description' => 'Science education aims to develop scientific literacy among learners that will prepare them to be informed and participative citizens who are able to make judgments
            and decisions regarding applications of scientific knowledge that may have social, health, or environmental impacts.
            The science curriculum recognizes the place of science and technology in everyday human affairs. It integrates science and technology in the social, economic,
            personal and ethical aspects of life. The science curriculum promotes a strong link between science and technology, including indigenous technology, thus preserving our
            country’s cultural heritage.'
        ]);
        \App\Models\Subject::create([
            'name' => 'Araling Panlipunan',
            'description' => "Naging batayan ng K-12 Araling Panlipunan Kurikulum ang mithiin ng “Edukasyon para sa Lahat 2015” (Education for All 2015) at ang K-12 Philippine Basic
            Education Curriculum Framework. Layon ng mga ito na magkaroon ng mga kakayahang kinakailangang sa siglo 21 upang makalinang ng “functionally literate and
            developed Filipino.” Kaya naman, tiniyak na ang mga binuong nilalaman, pamantayang pangnilalalaman at pamantayan sa pagganap sa bawat baitang ay makapag-aambag
            sa pagtatamo ng nasabing mithiin. Sa pag-abot ng nasabing mithiin, tunguhin (goal) ng K-12 Kurikulum ng Araling Panlipunan ang makahubog ng mamamayang mapanuri,
            mapagmuni, mapanagutan, produktibo, makakalikasan, makabansa at makatao na may pambansa at pandaigdigang pananaw at pagpapahalaga sa mga usaping
            pangkasaysayan at panlipunan."
        ]);
        \App\Models\Subject::create([
            'name' => 'Edukasyon sa Pagpapakatao',
            'description' => "Ang tunguhin o ”outcome” ng pag-aaral sa batayang edukasyon ay ang panlahatang pag–unlad taglay ang mga kasanayan sa ika–dalawampu’t isang siglo.
            Taglay ito ng isang mag-aaral kung mayroon siyang mga kakayahang pangkaalaman, pandamdamin at pangkaasalan na magbibigay sa kanya ng kakayahan
            upang mamuhay at magtrabaho, malinang ang kanyang mga potensiyal, magpasiya nang mapanuri at batay sa impormasyon, makakilos nang epektibo sa lipunan at pamayanan sa konteksto ng sandaigdigan upang mapabuti ang uri ng kanyang pamumuhay at ng kanyang lipunan (Literacy Coordinating Council, Setyembre 1997)."
        ]);
        \App\Models\Subject::create([
            'name' => 'Technology and Livelihood Education',
            'description' => "Technology and Livelihood Education encompasses the field of Home Economics (H.E.); Industrial Arts (IA); Agri-Fishery Arts (AFA); and Information, Communication. and
            Technology (ICT). The 24 TLE courses can be categorized under any of these fields.
            TLE as a course has two streams—the TR-based TLE and the Entrepreneur-based TLE—and every school has a choice as to which stream to offer, with consideration
            forfaculty, facilities, and resources. Both streams are based on the Training Regulations, but the Entrepreneur-based TLE embeds entrepreneurship concepts in the
            teaching of the various subjects in HE , IA, AFA, and ICT."
        ]);
    }
}