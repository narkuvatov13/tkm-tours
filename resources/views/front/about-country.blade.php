@extends('layouts.front.app')
@extends('layouts.front.navigation')
@section('title',' About Country Türmenistan Tours')
@push('style')
<style>
    .about-header-img {
        background-image: url("{{ asset('images/6.jpg') }}");

    }

    .about-header-img::before {
        content: "";
        background-color: #000;
        position: absolute;
        opacity: .4;
        height: 8rem;
        width: 100%;
    }
</style>
@endpush


@section('content')
{{-- Header --}}
<section class="about-container">
    <header class="about-header relative w-full">
        <div class="about-header-img h-32 w-full bg-cover  flex items-center justify-center ">
            <h1 class="uppercase text-4xl lg:text-6xl font-semibold text-gray-200 z-10 select-none">About Country</h1>
        </div>
    </header>
</section>


{{-- Content --}}
<main class="container p-10 mt-8">

    {{-- COUNTRY INFORMATION --}}
    <section class="country-information">
        {{-- Header --}}
        <header class="flex justify-center items-center mb-12">
            <h1 class="text-xl lg:text-5xl uppercase text-indigo-700 font-semibold "> Country Information </h1>
        </header>


        {{--Country Geography --}}
        <section class="country-geography">
            <div class="country-geography-content flex flex-col justify-center items-center md:flex-row md:gap-20">
                <div class="country-geography__img h-full mb-3 md:w-1/2 flex justify-center items-center">
                    <img class=" md:w-fit md:h-[32rem] object-contain shadow-md shadow-gray-600 rounded" src="{{asset('images/country_about/Turkmenistan-tourism-map-newest.webp')}}" alt="">
                </div>
                <div x-data="{ isOpen: false }" class="country-geography-content__text md:w-1/2 select-none">
                    <h1 class="country-geography-content__text__header mb-5 text-3xl uppercase text-indigo-700 font-semibold underline-offset-4 underline">Geography</h1>
                    <div class="country-geography-content__text__paragraph">
                        <p class="mb-3 text-md text-gray-600 text-justify select-none tracking-wide">
                            Turkmenistan emerged as an independent state in 1991.
                        </p>
                        <p class="text-md text-gray-600 text-justify select-none tracking-wide">
                            The national capital is Ashgabat. There are five administrative subdivisions, called velayat, or region, each with its own regional capital:
                        </p>
                        <ul class=" ml-16 mt-4 list-disc text-indigo-600 font-semibold ">
                            <li>Ahal Velayat (Anau)</li>
                            <li>Balkan Velayat (Balkanabad)</li>
                            <li>Mary Velayat (Mary)</li>
                            <li>Dashoguz Velayat (Dashoguz)</li>
                            <li>Lebap Velayat (Turkmenabad)</li>
                        </ul>
                    </div>

                    <div class=" my-8 ">
                        <button x-cloak @click="isOpen=true" class="px-8 py-2.5 text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600 text-lg font-medium">Read More...</button>
                    </div>
                    {{-- Modal --}}
                    <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem]   p-4 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                        {{-- Modal Content --}}
                        <div class="modal-content ">
                            <div class="mb-4"></div>
                            <p class=" capitalize tracking-wider text-gray-200 select-none">
                                Turkmenistan borders Kazakhstan and Uzbekistan in the north and east, and Afghanistan and Iran in the south. The country is big: Turkmenistan covers an area of 492,000 square km. It stretches for 1100 km from west to east- from the Caspian Sea to the Amu Darya River, and for 650 km from the Uzbek border in the north to the Iranian border in the south.
                                The major part of the country is occupied by the Karakum desert (350.000 sq km). 20 per cent of its territory is mountainous and 1 per cent is made up of riverine oases. The Kopetdag range is in the south of Turkmenistan, while the Balkan Mountains are in the west and the Kugitang (or Koytendag) Range is in the east.
                                Turkmenistan is rich in mineral resources. It possesses the world’s fourth- largest reserves of natural gas and substantial oil resources. Turkmenistan is also a major cotton producer, and has a growing textile industry.
                            </p>
                        </div>
                        {{-- Modal Button --}}
                        <button @click="isOpen = false" class="absolute top-3 right-4">
                            <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <hr class="my-20">


        {{-- History --}}
        <section class="country-geography">
            <div class="country-geography-content flex flex-col justify-center items-center md:flex-row md:gap-20">
                <div x-data="{ isOpen: false }" class="country-geography-content__text md:w-1/2 select-none">
                    <h1 class="country-geography-content__text__header mb-5 text-3xl uppercase text-indigo-700 font-semibold underline-offset-4 underline">History</h1>
                    <div class="country-geography-content__text__paragraph">
                        <p class="mb-3 text-md text-gray-600 text-justify select-none tracking-wide">
                            Evidence of human life on the territory of present-day Turkmenistan started in the Paleolithic Era. Rock inscriptions can be seen in Jebel in the Krasnovodsk Peninsula, and various finds can be observed in the National Museum in Ashgabat. More extensive is the evidence of human settlements from the Neolithic and Eneolithic Eras: various sites in the foothills of the Kopetdag mountain range at Djeytun (near Ashgabat) and Anau (near Ashgabat) show evidence of early agricultural activity and village-like settlements.
                        </p>

                    </div>

                    <div class=" my-8 ">
                        <button x-cloak @click="isOpen=true" class="px-8 py-2.5  text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600 text-lg font-medium ">Read More...</button>
                    </div>
                    {{-- Modal --}}
                    <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem] h-[28rem]  p-6 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                        {{-- Modal Content --}}
                        <div class="modal-content  ">
                            <div class="mb-4"></div>
                            <p class=" capitalize tracking-wider text-gray-200 select-none">
                                Evidence of human life on the territory of present-day Turkmenistan started in the Paleolithic Era. Rock inscriptions can be seen in Jebel in the Krasnovodsk Peninsula, and various finds can be observed in the National Museum in Ashgabat. More extensive is the evidence of human settlements from the Neolithic and Eneolithic Eras: various sites in the foothills of the Kopetdag mountain range at Djeytun (near Ashgabat) and Anau (near Ashgabat) show evidence of early agricultural activity and village-like settlements.



                                For those with a special interest in visiting these sites please contact us directly.



                                The Bronze Age marked the beginning of several large oasis settlements with not only residential functions, but also ritual and burial sites, and with evidence of the existence of contacts with people from Indian, Bactrian and Mesopotamian civilizations. While remains of the Bronze Age settlement in Abiverd (near Kaahka) has largely been covered by settlements from later times, the oasis region of Margush at the previous Murghab river delta remains impressive evidence of the existence of a civilization that has recently been recognized as a fifth Bronze Age civilization next to Egypt, Mesopotamia, India and China. The civilization is referred to as the Bactrian-Margianian Civilization. Dozens of settlements from different time periods within the Bronze Age are spread around the territory where in ancient times the Murghab River flowed. Among these are Altyn Depe, Namazga Depe, Keleli, Togolok, and Ajikui.



                                In the late Bronze Age life in the Murghab delta oasis declined and over the next centuries concentration of habitation shifted – with the shifting of the Murghab River flow - towards the area we now refer to as Merw, a city that reached the peak of its fame under the Seljuk Empire in the 10th century.



                                The first recorded evidence of population settlements in the Merw area was found in the Behistun rock inscription in Iran which was created in the VI c. BC when most of present-day Turkmenistan was part of the Achaemenid Empire.



                                Merv under the name of Aleksandria Margiana (Erk Kala or Iskander Kala) was included in the area conquered by Alexander the Great and mentioned by a number of Hellenistic and Roman authors. The Seleucids, Alexander’s successors, founded the second city of Merv (IV c. BC), known today as Gyaur Kala, which experts identify with Antiochia Margiana.



                                The Seleucids and after them the Parthians and Sasanids developed Merv as administrative, cultural, trading and military center. After the battle of Carrhae thousands of Roman soldiers were sent to settle in Margiana. The Sassanid period was marked by religious tolerance and Sassanid Merv was a meeting point of many religions: Zoroastrianism, Judaism, Christianity, Buddhism, and Manichaeism. Under the later Sassanid kings Merv was a seat of a Christian archbishopric.



                                The Moslem Arabs conquered Merv in 651. They moved the city slightly to the west of the original site and made it the capital of Khorasan province. Along with Baghdad, Cairo and Damascus, it became one of the most important centers of Islam. In those days’ silk was being cultivated in Merv. After having been ruled by Arab khalifs, Merw was occupied by several feudal dynasties, such as the Persian Samanids and Turkic Ghaznevids.



                                Merv’s greatest period of glory was under the rule of the Turkic Seljuks (XI-XII cc), who occupied Khorasan and defeated the Ghaznevids near Merv in 1040, establishing their regional eastern capital here. At this time Merv was called ‘The Jewel of the sands’, ‘the Queen of the east’, and Marw al- Shahijan ‘the Soul of Kings’.



                                The Great Seljuk Empire extended from China to Syria and from the Oxus to Arabia. The Seljuks founded a group of dynasties in Persia, Syria and Asia Minor and were responsible for the construction of monumental buildings, notable for their elaborate ornamental brickwork and stucco decorations. They encouraged the arts, all kind of sciences, literature, and architecture. Seljuk Merv was like a magnet to many celebrated scholars, poets and writers, who worked in its legendary libraries and observatory. Among them was Yaqut al–Hanawi, who spent about three years in Merw collecting material for his geographical dictionary, and Omar Khayyam, who compiled his astronomical tables, the so-called Jalal al-Din Calendar, working in the Merv Observatory.



                                The talent of Omar Khayyam flourished under Malik Shakh, who owed his reputation of being the greatest of the Seljuks’ sultans mostly to the wise government of his vizier Nizam ul-Mulk. In 1092 Malik Shakh died and the empire experienced a short period of instability. The high point of the Seljuk empire was under the rule of Sultan Sanjar (1118 - 1157) and his fame eclipsed even that of Malik Shakh.



                                After the reign of Sultan Sanjar the power of the Seljuks began to wane. In 1221 the Mongols conquered Merv. They destroyed the city, burnt the libraries, demolished the dams and massacred the citizens. One chronicler estimated that 700,000 people were killed here. Merv never fully recovered from this disaster; however, the archeological excavations at Merv indicated that Merv was not completely abandoned after the Mongols.



                                In the early fifteenth century the descendants of Emir Timur (Tamerlane) re-built the dams and founded a new urban center. However, Merw never got back its previous status of fame, as Emir Timur made Samarkand the capital of the Timurid Empire.



                                In the 18th century Merv came under the rule of the emir of Bukhara and in the 19th century the emir of Khiva conquered it. However, the Turkmen Teke tribe drove out the troops of the emir in 1836 and remained in control of the area until the tsarist Russian armies annexed Merv in 1884.



                                Remains of an important residential-ritual complex at Nissa dating from the second half of the III c. BC indicate the presence at the territory of present-day Turkmenistan of settlements from the time of the rise of the Parthian Empire.



                                The Parthian empire, also known as the Arsacid Empire, was the most enduring of the empires of the ancient Near East. A lot of information about the Parthian empire was taken from Roman and Chinese historical chronicles, whereas the Parthians left relatively little recorded references.



                                The first mention of Parthia we can find in Iran in the Behistun rock inscription by Dari Gistaspus. At that time Parthia was one of the satrapies of the Persian Achaemenid empire and later, after Alexander’s death – the Seleucids. In the middle of the 3d century B.C. a number of uprisings took place in Central Asia against the Hellenistic power and Parthia was the center of one of such uprisings. At the head of the biggest one was Arsaces I, who became the founder of the independent Parthian kingdom and the Arsacid dynasty.

                                Mithridates I of Parthia (r. c. 171–138 BC) greatly expanded the empire by seizing Media and Mesopotamia from the Seleucids. At its height, the Parthian Empire stretched from the northern reaches of the Euphrates, in what is now eastern Turkey, to eastern Iran. The empire, located on the Silk Road trade route between the Roman Empire in the Mediterranean Basin and the Han Dynasty in China, quickly became a center of trade and commerce.

                                The Parthians largely adopted the art, architecture, religious beliefs, and royal insignia of their culturally heterogeneous empire, which encompassed Persian, Hellenistic, and regional cultures.

                                With the expansion of Arsacid power, the seat of central government shifted from Nissa, Turkmenistan to Ctesiphon along the Tigris (south of modern Baghdad, Iraq), although several other sites also served as capitals.

                                Rome always clashed with Parthia, in particular about the control over Armenia and the Levant, considering it as the main obstacle on the Great Silk Road. In 53 B.C. the Roman general Crassus invaded Parthia. At Carrhae Crassus was beheaded by the Parthians. The Roman army was defeated and Roman prisoners were sent to settle in Margiana.

                                However, the Romans launched a counterattack against Parthia and several Roman emperors invaded Mesopotamia during the Roman-Parthian Wars. However, frequent civil war between Parthian contenders to the throne proved more dangerous than foreign invasion, and Parthian power evaporated when Ardashir I, ruler of one of the Parthian vassal states, revolted against the Arsacids and killed their last ruler, Artabanus IV, in 224 AD. Ardashir established the Sassanid Empire, which ruled Iran and much of the Near East until the Muslim conquests of the 7th century AD, although the Arsacid dynasty lived on through the Arsacid Dynasty of Armenia.

                                Another great empire that developed at the territory of what is today Turkmenistan, is in the region that was then called Khorezm. Kunya (Kone) Urgench was the capital of the Khorezm Empire.



                                The city of Biruni and Avicenna, al Farabi and al Khorezmi was located on the caravan routes which lead to the Caspian Sea and Russia. The history of Kone Urgench is closely connected with the history of Khorezm, coming through several periods of flourishing and decays:



                                Khwarezm, Khorezm, Chorasmia, Hualazimo as it is named by Persians, Chinese, Greeks and Arabs in different ancient reference works, are all names of one important historical region along the Amu-Darya River. The prosperity of Khorezm was built on intensive agriculture, animal husbandry and trade.



                                Khorezm was subjected to the Achaemenid Empire for about two centuries, in the VI-V cc BC, Khorezmian stone was delivered to Persia for the construction of Achaemenid palaces. By the V-IV cc B.C. Khorezm became an independent region, at the head of which was a king or shah. His residence was at a palace at the left bank of the Amu Darya River.



                                After a short period of subjugation to the Kushan Empire Khorezm again became independent. The residence of Khorezm shah was moved to the right bank of the Amu-Darya: according to al-Biruni the citadel of Kath was constructed there in 304 BC.



                                Until the VII c, when the Arabs brought Islam into the Central Asian region, Khorezm maintained an authority of an independent country and experienced a mixed culture of religions - Zoroastrianism, Christianity, perhaps Judaism. In the X c. Khorezm was incorporated in the Samanid Empire.



                                Under the Samanids Khorezm traded with the Khazaris that lived around the northern Caspian Coast and up the Volga River, and the variety of goods traded increased significantly. Dried fruit, sweets, broadcloth, carpets, brocade, boats, bows, arrows, falcons, castor oil, fish teeth etc. were available at the bazaars of Gurgandj. The residence of Samanid governor Mamun was located in Gurgandj (on the left bank of the Amu Darya River), which appeared as the northern capital of Khorezm, whereas the successors of the local Khorezm dynasty continued to reside in Kath. In 995 Mamun, who received the ancient title of Khorezmshah, was able to unite Khorezm, and Gurgandj became the only capital of the new Khorezmian state.



                                In 1017 Khorezm was conquered by the Gaznevids. Then the Oguz Turks came. One of the first Oguz Turkic rulers, Alp Arslan, suppressed a local rebellion and Khorezm became one of the provinces of the Seljuk Empire. A new Anushtegin dynasty of Khorezmshahs was founded in the last years of the XI c. The founder of the new dynasty was Anush Tegin - an ex slave of the Seljuk emir, who obtained a high position under Malik Shakh, promoted himself and became a governor of Khorezm.



                                By the XII c. Khorezm obtained independence from the Seljuks and became the largest empire of the Middle East with its capital in Gurgandj. It stretched from Iraq in the west till India in the east, from the Aral Sea in the north till the Indian Ocean in the south. After the Mongol invasion the Empire collapsed and the capital was destroyed.



                                In the 15th c. Khorezm was controlled by the Khans of Golden Horde. At that time Khorezm became the wealthiest and culturally most developed province of the Golden Horde and Kone Urgench experienced its second flourishing.



                                Ibn Batuta, a contemporary of Kutlug Timur and Turabek Khanym, visited Kone Urgench in 1333 and described it as “very beautiful, majestic and of considerable size with large and rich bazaars, wide streets and a lot of impressive buildings”.



                                In 1395 the power of Golden Horde came to an end. After Tamerlane’s invasion the city was partly rebuilt, but abandoned when the Amu-Darya changed its course in the 16th century.



                                It is clear that by far the largest number of historical sites on the territory of Turkmenistan date from the times of the Hellenistic, Parthian, Khorezmian and Seljuk empires, that thrived with the development of the Great Silk Road. Here’s a piece of history about that famous Road:



                                The Great Silk Route, starting from the Chinese city of Ch’ang-an (modern-day Xi’an) and leading to the shores of the Mediterranean, spanning over Asia and Europe with a total length of 7,000 km, is history today. A history of more than 2,500 years. The formal starting date of the Silk Road is connected with the year 105 BC, when the Chinese arranged a fact-finding mission and started their trek to the west. Silk became the major commodity transported along this road. For centuries, Chinese kept the secret of its manufacture, banning to take silkworm eggs out of the country.



                                This route from China to the West, one of the greatest trading routes in the world, was named “die Seidenstrasse”, the Silk Road, by the 19th century German explorer Baron Ferdinand von Richthofen.



                                However, not only luxurious Chinese silk had been traveling along this road but also a great number of raw materials such as bronze and cobalt, Chinese porcelain, Venetian glass, Afghan jade, lapis lazuli and rubies, Iranian turquoise, tin and copper, Siberian furs, Arabian incense and perfumes, Indian cotton, heavenly horses, Mervian steel and melons, Egyptian papyrus and other luxuries, flowers and vegetables, moreover new thinking and ideas, arts, religions, modern technologies and other practical inventions. Some researchers suggest that the Parthian parchment inspired the Chinese to develop paper for writing, which replaced the previously used silk and bamboo.



                                The Silk Road was not a single road. It was an unparalleled and very complicated network of routes. Its main branches skirted north and south of the Tarim basin across Central Asia and the Iranian plateau further to the west, meeting at Dunhuang at one end and Kashgar at the other. From Kashgar southbound traffic crossed the Karakoram; westbound the Tian Shan. From Sogdiana caravans could follow either the Oxus (Amu Darya) or the Jaxartes (Syr Darya), via Khorezm and its center of Kunya Urgench on the way to the Aral Sea and further to Russia.



                                But the more popular branch was a southern route, taking travelers from Dunhuang across the inhospitable Taklamakan Desert (‘to come in and never come out’), Kizilkum Desert (‘Red sands’) and Karakum Desert (‘Black sands’) to the west. The city of Bactra (the capital of the Bactria region; present-day Balkh in northern Afghanistan), which perhaps is not so familiar to modern-day travelers, was roughly in the center of the Silk Road and was also the gateway to India.



                                Bactra was one of the major centers of Buddhism in the time of the Kushan Empire; Buddhist influence can be found in the shape of a cave city called Ekedeshik on the Turkmen side of the border in the same geographical region.



                                From Bactra travelers went northwards via Serags or Mehne (present-day Meane), and Dandankan, and reached the key caravan city of Merw



                                Other travelers approached Merv from a northern route. Coming from Bukhara, after having crossed the Oxus (which was a very difficult affair) and having had a rest in Amul (the remains of which are still visible at the suburbs of modern-day Turkmenabat), they went southwards to Merv through the formidable Karakum Desert.



                                From Merw, some caravans cut straight across the Kopetdag Mountains on the way to Nishapur in present-day Iran, passing by Abiverd (located between Ashgabat and Merw at the foothills of the Kopetdag Mountains in southern Turkmenistan), which in medieval times became even more prosperous than Nissa (at a similar location but close to present-day Ashgabat).



                                Others traveled via Dehistan (Misrian) to the Parthian capital of Ctesiphon (in present-day Iraq, and built in 129 BC). From the Iranian plateau travel went down into Mesopotamia via Dura-Europos (in present-day Syria), a city founded on the banks of the Euphrates by the Seleucids in 280 BC, and a flourishing Parthian stronghold in the first century BC.



                                From Dura caravans went northwest via Palmyra and Aleppo (Syria) to Antiochia and across the mountains and valleys of the western parts of modern-day Turkey all the way to the Mediterranean Sea. In different periods of time different civilizations shaped the image of these vital trade routes. The fortunes of these civilizations rose and fell with the fate of the Silk Road.



                                So, many centuries have been passed since its decline, but today you have a chance to rediscover the Road, to recreate its atmosphere and perhaps to gain an experience similar to that of the hundreds of thousands of traders who traveled along the Great Silk Road since ancient times.



                                If you are interested in visiting both well-known and less known Silk Road sites, please contact us directly. We can offer a wide variety of itineraries that follow the lesser known, more difficult to reach yet fascinating monuments that are proud reminders of the Silk Road in Turkmenistan.
                            </p>
                        </div>
                        {{-- Modal Button --}}
                        <button @click="isOpen = false" class="absolute top-3 right-4">
                            <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                            </svg>
                        </button>
                    </div>
                </div>
                {{-- History Img --}}
                <div class="country-geography__img h-full mb-3 md:w-1/2 flex justify-center items-center">
                    <img class=" md:w-fit md:h-[32rem] object-contain shadow-md shadow-gray-600 rounded" src="{{asset('images/country_about/Turkmenistan-tourism-history.webp')}}" alt="">
                </div>

            </div>
        </section>
        <hr class="my-20">


        {{-- Cuisine --}}
        <section class="country-geography">
            <div class="country-geography-content flex flex-col justify-center items-center md:flex-row md:gap-20">

                {{-- Cuisine Img --}}
                <div class="country-geography__img h-full mb-3 md:w-1/2 flex justify-center items-center">
                    <img class=" md:w-fit md:h-[32rem] object-contain shadow-md shadow-gray-600 rounded" src="{{asset('images/country_about/Turkmenistan-tourism-cuisine.webp')}}" alt="">
                </div>

                {{-- content --}}
                <div x-data="{ isOpen: false }" class="country-geography-content__text md:w-1/2 select-none">
                    <h1 class="country-geography-content__text__header mb-5 text-3xl uppercase text-indigo-700 font-semibold underline-offset-4 underline">Cuisine</h1>
                    <div class="country-geography-content__text__paragraph">
                        <p class="mb-3 text-md text-gray-600 text-justify select-none tracking-wide">
                            Turkmen cuisine is varied, and includes both meat dishes and soups, and as well as plenty of fruits and vegetables. Bread is a must for every meal. A piece of fresh Turkmen flat round bread, churek, baked at home in clay ovens, is delicious in combination with any meal or snack.
                            Most cafes and restaurants cook up a combination of Turkmen and Russian dishes, and offer a large list of salads and side dishes (rice, fried potatoes, pasta, and mashed potatoes). None of the dishes are heavy on spices, but herbs such as parsley, coriander, basil and dill are frequently added.
                        </p>
                    </div>

                </div>
            </div>
        </section>
        <hr class="my-20">



        {{-- Traditions. Arts and crafts --}}
        <section class="country-geography">
            <div class="country-geography-content flex flex-col justify-center items-center md:flex-row md:gap-20">

                <div x-data="{ isOpenTraditions: false, isOpenArt: false }" class="country-geography-content__text md:w-1/2 select-none">
                    <h1 class="country-geography-content__text__header mb-5 text-3xl uppercase text-indigo-700 font-semibold underline-offset-4 underline">Traditions. Arts and crafts</h1>
                    <div class="country-geography-content__text__paragraph">
                        <p class="mb-3 text-md text-gray-600 text-justify select-none tracking-wide">
                            Turkmen are a Turkic-speaking people of nomadic origin (similar to the Kazakhs steppe nomads and the Kyrgyz mountain nomads, and differing from the Persian-speaking Tajiks, or the Turkic-speaking settled Uzbeks). While the majority live on the territory of Turkmenistan, significant numbers of Turkmen can also be found living in Iran, Afghanistan, and even Syria and Iraq.
                        </p>

                    </div>
                    <div class=" my-8  flex flex-col md:flex-row gap-4">
                        <button x-cloak @click="isOpenTraditions= true" class="px-8 py-2.5  text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600 text-lg font-medium ">Read More About Traditions ...</button>
                        <button x-cloak @click="isOpenArt=true" class="px-8 py-2.5  text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600 text-lg font-medium">Read More About ...</button>
                    </div>

                    {{-- Modal Read More About Traditions--}}
                    <div x-show="isOpenTraditions" class="modal bg-gray-800 opacity-90 w-[32rem] h-[28rem]  p-6 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                        {{-- Modal Content --}}
                        <div class="modal-content  ">
                            <div class="mb-4"></div>
                            <p class=" capitalize tracking-wider text-gray-200 select-none">
                                Turkmen adhere to the Sunni branch of Islam, but also respect a wide variety of local traditions, customs and rituals. Ancient Islamic monuments such as mosques and mausoleums often serve as destination for a pilgrimage as well. Particularly mausoleums and graves of local respectables attract a constant flow of people praying for a wish, circling a grave or other monument of importance, tying pieces of cloth, placing little stone piles or leaving symbolic personal belongings behind, hoping for their wish to come true. The most popular destinations for pilgrimage in Turkmenistan include the graves of Gozli Ata near Balkanabat, Parau Bibi near Serdar (Kyzyl Arvat), Said Jemaleddin in Anau, Kyz Bibi in Nohur, Yusuf Hamadani and Ibn Zayd in Merw, Kyrk Molla and Najmeddin Kubra in Kunya Urgench, Meane Baba in Meane, Serakhs Baba in Serags, and Kyrk Kyz in Kugitang.
                                Turkmen tribes since the arrival of Oghuz (Guzz) Turks (10th century AD) lived in yurt-settlements and roamed the desert oases with their herds of camels, sheep and goats. Next to the care for the family and the household, women engaged in intricate forms of dress embroidery, knitting, silk weaving and carpet knotting, whereas men busied themselves with the herds, horses, and were masters at pottery baking and jewelry making.
                                For the roaming tribes the main public meeting place was at the bazaar. Trade in cattle, local agricultural produce and arts and crafts brought together large crowds of people coming from faraway places. Melons and grapes were on sale, next to carpets, jewelry and silk material. Today the bazaar continues to fulfill this important role. While every local settlement has its own daily bazaar, once a week the bazaar extends to include traders from all around the neighboring villages and districts. The absolute best example of such a bazaar we can see at Tolkuchka Bazaar just outside Ashgabat. Biggest in Central Asia and comparable in size with the Sunday Bazaar in Kashgar (China) this bazaar is working on Thursdays, Saturdays and Sundays. Other bazaars worth visiting are the Sunday bazaars in Turkmenabad or Mary.
                                Lots of people also gathered at the occasion of a family’s celebration, where everyone would appear in their best dress and decorations, and would enjoy music performances and dancing.
                                In Turkmen tradition marriage remains the most colorful social event. When a Turkmen family holds a wedding or “toy” (literally: feast) a lot of guests are invited and all neighbors help to celebrate it, bringing crockery and cooking up dishes. Every passer-by is welcomed to attend. Marriage is a very lengthy process, which begins with arranging the match. The suitor sends matchmakers to the girl’s parents. The matchmakers - relatives of the suitor - will bring lavish gifts to the girl’s parents and ask their consent. Then the bride price and wedding date will be set. When a Turkmen bride arrives to the bridegroom’s house both mothers offer to the bride and guests sweets, wishing the bride a sweet life. They present toys to children, wishing the bride to have children. At this moment young men toss up telpeks –traditional fur hats, wishing the bride and the bridegroom a long life. Every word and every motion during this ceremony are loaded with meaning. Different games and tournaments are always held to celebrate this family occasion. During the ceremony “gushak chozdurme” or un-tying a sash (waste band of the groom) the bridegroom and the bride are dressed in traditional costumes. The bride groom is wearing a red silk gown with a scarlet homespun sash and a shaggy hat of snow-white sheepskin. The bride is wearing a long silk dress and her head is covered by traditional robe and her mouth is closed by a special kerchief of silence.
                                Turkmen women have never completely closed their faces. The legend says that Turkmen have originated from the light of the Great Creator therefore their faces should be opened to the Sun. That is how Turkmen are dressed for a feast. Their embroidered dress and silk headscarves mark the tribe they represent, and intricate gold-on-silver jewelry completes their decorations.
                                The Turkmen telpek is only a part of the traditional Turkmen male costume. It obliges the person with a number of duties - to protect his family, to be wise and to live in dignity, to be true to his word and merciful. When the bride takes off the bridegroom’s hat and unties his sash that means she will always serve her husband.
                                If you are interested in watching a marriage ritual, include a visit to a folklore show to your itinerary in Ashgabat, and arrange your trip such that it includes a Thursday, Saturday or Sunday stay in Ashgabat for a visit to Tolkuchka Bazaar.
                            </p>
                        </div>
                        {{-- Modal Button --}}
                        <button @click="isOpenTraditions= false" class="absolute top-3 right-4">
                            <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                            </svg>
                        </button>
                    </div>

                    {{-- Read More About--}}
                    <div x-show="isOpenArt" class="modal bg-gray-800 opacity-90 w-[32rem] h-[28rem]  p-6 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                        {{-- Modal Content --}}
                        <div class="modal-content  ">
                            <div class="mb-4"></div>
                            <p class=" capitalize tracking-wider text-gray-200 select-none">
                                raditional Turkmen women’s garments are real pieces of art. Dresses, overcoats and scarves are made form fine material, woven on simple horizontal looms, and decorated with intricate embroidery, unique in the Central Asian region. Next to being decorative, these embroideries, particularly those at the edges of a garment, were also functioning as an amulet that would deter evil spirits.
                                The art of sowing embroidered head coverings (kurte or chirpe), dresses (koynek), single-piece robes (don) and scarves has remained unchanged over centuries. These garments are plain in shape, and well adapted to the local living and climatic conditions. The dresses and overcoats were mostly made from narrow pieces of silk material called ketene, in red, green or purple color, whereas for some of the single-piece overcoats cotton material was also used. A selection of
                                Chirpe head coverings were worn by women on special occasions. The decorative embroidery covered the whole garment, and reflected stylized shapes of animals, household items, but mostly flowers (lotus, tulip). Kurte head coverings – though similar in shape and purpose – were decorated less densely than the chirpe.
                                The shape of the ceremonial dress called ketene koynek – also made from ketene material – stresses the yellow lining of this material. The lining in turn – running all the way from top to bottom of the dress in the front, back, both sides and over the arms, stresses the overall shape of the dress.
                                Besides a dress, robe and head covering women wore a cover for the lower part of their face. This garment is called gynach. They are sown from silk material and triangular in shape. Two sides are richly decorated with embroidery and brushes.
                                A less formal, yet extremely popular piece of clothing that was and still is worn at home by virtually everyone, and in public by nearly all women in the cold period of the year are jorabi and cheshki. These respectively longer or ankle sized knitted socks are made from sheep wool, camel hair or synthetic thread, and are intricately decorated on all sides.
                                Young girls and boys and teenagers, up to the time they marry, frequently wear an embroidered head cover called tahiya during formal functions, including when attending school or university.
                                Traditional Turkmen men’s robes, also called don, are made from cotton material with plain decorative edges. The don ichmek is a heavy winter version, made from sheep’s skin, polished/treated with pomegranate skin.
                                Men’s hats, telpek, come in many designs. The most striking is the silkme telpek, made from long sheep hair, and providing perfect protection to the head from heat and cold alike.
                                Fine collections of antique garments can be seen on display at several museums in Turkmenistan. But also at a wedding photo shoot next to popular monuments, in the streets and at the bazaars in the southern parts of Turkmenistan we can see ordinary people wearing these garments.
                                Jewelry
                                Traditional Turkmen jewelry is, just as the embroidered garments, very peculiar and unique for Turkmens only. And just as the garments, we can identify different styles and designs used by different Turkmen tribes. The ornaments are in general fairly massive; silver foundations were often gilded with gold top coatings, and with inlays of turquoise (Yomut) or Cornelian (Teke).
                                The craft of making jewelry has been practiced by Turkmen artisans since many centuries ago. Today we find samples of this jewelry dating from no earlier than the beginning of the 19th century. This can be explained by the fact that jewelers used old jewelry to make new creations, and therefore melted down old jewelry. Systematic collection of rare samples was begun in the late 1930s.
                                A wide variety of decorations are worn by women on the occasion of special celebrations. These pieces of jewelry are very large in size and more densely decorated with precious stones and engraved designs than the daily pieces of jewelry. A special set comes as bridal decorations, and a particular set is also made for children. All these have the combined functions as decoration as well as protective amulet.
                                Jewelry art includes not only personal decoration, but also other items made from precious metal and other metals, such as horse harnesses, knife handles, swords and whips. Personal decorations come in dozens of shapes and have each their own function. Here is just a short list to give you an idea of the wealth of Turkmen jewelry:
                                Gulyaka and gursakcha: the most frequently and constantly worn piece of jewelry worn by women; it is a round or oval shaped brooch, worn on the front edge of a dress’ neckband.
                                Gupba a conically-shaped piece of jewelry that is worn by young girls, on top of the head cover tahiya.
                                Chekelik a long pendant of triangular and other forms that hangs down from the head along the temples and cheeks. The largest pendants are inlaid with Cornelian or red glass. Brides often wear this type of decoration.
                                Gulak-khalka earrings that were very popular among women from the Yomut tribe in particular. They have the form of a round loop with a decorated plate in the center of it, and bangles hanging down as if they were sunrays. Teke women usually wore long ear hangers called tenechir.
                                Bilezik bracelets in the shape of cylinders, narrowing down towards the bottom, and teethed edges. The cylinders are usually composed of 4 or 5 sections. Some were as much as reaching from the wrist to the elbow.
                                Sachlyk a hair/tail decoration (sach means hair). The sachlyk is made up of two long vertical pendants joined by various horizontal constructions. The Yomut tribal sachlyk as an extra detail has bells at the bottom.
                                Yuzyk set of five rings connected on the upper part of the hand by silver strings, often connecting the yuzyk to a bracelet.
                                Bukov Teke chest pendants that hold very large, richly decorated discs.
                                Ildirgich a frontal ornament worn by Teke women. Whereas the ildirgich is composed of different little plaques and therefore more flexible in shape, the main component of the egme is a massive plaque with decorative Cornelian stone inlay.
                                Gynach-udzhi a long piece of jewelry that is attached to the sides of the head cover gynach.
                                Boyun-bag or boyun-tovuk necklaces of thick (twisted) silver with chest pendants, attached to a central medallion in the necklace.
                                Next to jewelry that fulfills mainly an esthetical function, there are also decorations that are purely fulfilling the function of protection against the evil eye. Some are worn, and some are sown into or onto clothing. Some are solid, and some have a hollow part inside, that leaves space from something to keep evil spirits at a distance (such as Koran texts, salt or coal).
                                Kheykel mostly square (leather) cases that hold Koran texts or other written charms. The top part of the case, and the shoulder or neck band, are covered with gold and silver decorations and inlays of various precious stones.
                                Eginlik an amulet-decoration that is believed to protect a mother’s milk.
                                Achar-bag a square charm holder mostly worn by Yomut tribe (decorations in blue).
                                Tumar a charm holder that was worn on the front, back or shoulder band, depending on the purpose of the charm it held. Shapes could be cylindrical, square, triangular or a combination of all these.
                                Goch-boynguz and ok-yai amulet-decorations sewn into boys’ clothing.
                                Various museums and several private collections in Turkmenistan have an impressive array of antique jewelry on display. Of course, you can also find Turkmen jewelry at Sunday bazaars. Without doubt the best occasion to watch the abundance of jewelry is when observing a Turkmen wedding ritual or photo shoot.
                                Carpets and felts
                                For Turkmen people carpets are not only a symbol of beauty and happiness, but also tell the story of their forefathers; carpets tell Turkmen history. For centuries, travelers through Turkmenistan document about the quality of the carpets woven here.
                                Although carpets were already being produced in the time of the Seljuks, the first written reference to Turkmen carpets was made by Marco Polo (XIII c). In the XIV c Ibn Batutta also writes about woolen carpets in homes of inhabitants of (Kunya) Urgench, and of silk carpets in the palace of Kutlug-Timur there. We can also find Turkmen carpets back in the paintings of the masters of the Italian Renaissance (XIV-XV cc), and (probably) in the miniatures of Timurid times such as the Shah-name (XV c).
                            </p>
                        </div>
                        {{-- Modal Button --}}
                        <button @click="isOpenArt= false" class="absolute top-3 right-4">
                            <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                            </svg>
                        </button>
                    </div>
                </div>
                {{-- Traditions. Arts and crafts Img --}}
                <div class="country-geography__img h-full mb-3 md:w-1/2 flex justify-center items-center">
                    <img class=" md:w-fit md:h-[32rem] object-contain shadow-md shadow-gray-600 rounded" src="{{asset('images/country_about/Turkmenistan-tourism-arts-drafts.webp')}}" alt="">
                </div>

            </div>
        </section>
        <hr class="my-20">


        {{-- Nature --}}
        <section class="country-geography">
            <div class="country-geography-content flex flex-col justify-center items-center md:flex-row md:gap-20">

                {{-- Nature Img --}}
                <div class="country-geography__img h-full mb-3 md:w-1/2 flex justify-center items-center">
                    <img class=" md:w-fit md:h-[32rem] object-contain shadow-md shadow-gray-600 rounded" src="{{asset('images/country_about/Turkmenistan-tourism-nature.webp')}}" alt="">
                </div>

                {{-- content --}}
                <div x-data="{ isOpen: false }" class="country-geography-content__text md:w-1/2 select-none">
                    <h1 class="country-geography-content__text__header mb-5 text-3xl uppercase text-indigo-700 font-semibold underline-offset-4 underline">Nature</h1>
                    <div class="country-geography-content__text__paragraph">
                        <p class="mb-3 text-md text-gray-600 text-justify select-none tracking-wide">
                            A boring landscape? In actual fact Turkmenistan holds some of the most fascinating diversity of landscapes, from moving sand dunes and limestone cliffs, to lush river valleys and mountains created in the Jurassic period, as well as volcanoes, waterfalls, lakes and of course the Caspian Sea. Moreover, it has several nature reserves that are home to some unique threatened species of flora and fauna. Below you will find a description of some of the best known nature reserves, their protected flora and fauna species and other specifics. We have selected those reserves the immediately bordering areas of which are accessible to visitors (all nature reserves in Turkmenistan are protected areas, and not accessible for visitors, other than scientists with approval from the Ministry of Nature Protection).
                        </p>
                    </div>

                    <div class=" my-8 ">
                        <button x-cloak @click="isOpen=true" class="px-8 py-2.5  text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600 text-lg font-medium">Read More...</button>
                    </div>
                    {{-- Modal --}}
                    <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem] h-[28rem]  p-6 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                        {{-- Modal Content --}}
                        <div class="modal-content  ">
                            <div class="mb-4"></div>
                            <p class=" capitalize tracking-wider text-gray-200 select-none">
                                Kugitang Nature Reserve is located in the south-western slopes of the Koytendag mountains (the Kugitang range), at the south-western extreme of the Gissar range of the Pamir-Alay mountain system. Generally, it lies at elevations of 900-3139m above sea level, which it reaches at Ayrybaba (the highest peak of Turkmenistan). There are a substantial number of water bodies: karst lakes, freshwater springs and hydrogen sulphate wells. Koytendag is famous for its unique caves and other geological features (marble onyx), as well as its archa forest and species of rare plants and animals such as the blind cave loach which inhabits underground lakes in the karstic caves. Kugitang is also famous for its representing the main periods of Earth development, including the illustration of ancient life, significant geological processes in Earth surface forms development, essential geomorphological and physical-geographical particularities of relief. The site is composed of rocks of the Precambrian, Paleozoic, Mesozoic, and Cainozoic Eras rich with ancient fossils of Molluscs, Brachiopods, and dinosaurs - including a dinosaur footprint trail. At the base of the Koytendag Mountains there are igneous rocks, testament to ancient volcanism, as well as tectonic faults and canyons. The unique geological formations of Koytendag cave complex have no equal in Eurasia for the diversity of geological processes that formed them, as well as for the beauty of their geological phenomena.



                                Repetek



                                The Repetek Nature Reserve was founded in 1927 and occupies a territory of more than 35 000 hectares to study unique desert fauna and flora. It is located in the central part of the eastern Karakum. The unique natural ecosystem of Repetek attracted the attention of many scientists and a number of scientific conferences and seminars were held here. The importance of Repetek was recognized by UNESCO and in 1979 Repetek obtained the status of an International Biosphere Reserve. Repetek is a place where we can observe practically all forms of the Karakum’s sandy landscape, which are dune-like, ridge-like, hilly and other possible variations, as well as striking the attention ‘Repetek Sahara’ and groves of white and black saxaul (haloxylon) - a forest without a shade. We call saxaul a tree without leaves. It has leaves, but they are very thin. It helps the saxaul tree to withstand the extremeness of temperature and harsh climate. Repetek is blessed with more than 240 sunny days a year and the temperature of the sandy surface is often 80 degrees Celsius. Turkmen consider saxaul tree the best to make a fire in a tandyr, where they bake the traditional round bread ‘churek’. Other interesting trees in the Repetek are silver acacia, weeping willow. The Repetek Nature Reserve is home to an amazingly diverse array of fauna. There are 300 different species of beetles, 160 species of butterflies, spiders. The venom of the Karakurt spider is 8-9 times stronger than that of cobra and its bite is much more dangerous than scorpion, phalanx and tarantula. The ornithology-fauna consists of more than 160 species of birds and among them are saxaul jay, a golden eagle, owl, falcon, buzzard, kestrel etc. Only in Repetek you can observe four different species of sparrow. Repetek is a kingdom of reptiles. There are 30 species of lizards, 9 species of snakes and tortoises. Among mammals are foxes, gazelles, steppe and dune cats, porcupines, jerboas, ground squirrel, jackals.



                                Syunt Hazardag Nature Reserve



                                The landscape and environmental conditions of the Syunt Hazardag Nature Reserve are typical of the south-western part of the Kopetdag Mountains, which form the north-western edge of the Turkmen-Khorasan mountain system. The Sumbar river (the right-hand branch of the Etrek river) divides the site into northern and southern parts. The right bank is 300-1,900 m in altitude, consisting of wide ridges and canyon-like gorges. In its upper reaches the river valley is narrow with gallery floodplain forests and in some areas there are scattered orchards and small vegetable gardens. The upper river terraces are arid steppe. The climate is arid and subtropical with long, dry summers with temperatures of 35-45°C. Precipitation mainly occurs from November to April, but heavy showers occur occasionally in summer. This area is known as one of the world centers of wild relatives of cultivated plants - subtropical horticulture crops. Wild progenitors of the woody species pomegranate, fig, apple, walnut, pistachio, pear, dog rose, almonds and cherry are widely distributed here. The flora is also rich in wild relatives of cultivated forms of wheat, barley, rye, oats and other important cereals and legumes. All of them are very important as the historic gene pool for crops. This region was identified by Prof. Nikolai Vavilov as one of the seven "Centers of Origin" of cultivated plants (I - South Asian tropical; II- East Asian; III - South West-Asian; IV - Mediterranean; V - Abyssinia; VI - Central American and VII - Indian, or South American). Central Asia is the motherland for soft wheat, bean, pea, fee, hemp, turnip, carrot, garlic, pear, apricot, apple, fig, and others and is important for the in-situ conservation of these species. Their presence, along with other wild crop relatives makes this reserve one of the world's natural nurseries of horticulture crops. The nature reserve holds globally and near threatened mammals such as the Persian Leopard, Turkestan Lynx, Striped Hyena, Turkmen Wild Goat, Afghan Urial (steppe sheep), Central Asian Otter and Masked Mouse-tailed Dormouse.



                                Kaplankyr State Nature Reserve



                                The Kaplankyr Nature Reserve is located on the Kaplankyr Plateau, bordering the Ustyurt Plateau, in the northwestern part of Dashoguz Velayat. It covers some 2822 km² in total. It was established in 1979 for the protection and resurrection of indigenous flora and fauna in this region. The Reserve counts approximately 210 warm days per year, and less than 100 mm rainfall.

                                26 species of mammals, 147 species of birds, and 918 species of higher plants have been recorded in the Kaplankyr reserve. Protected rare species of animals found in the reserve include the Central Asian gazelle, the Ustyurt mountain sheep, as well as substantial populations of saiga antelopes that migrate here from Karakalpakstan in the winter. Plants include the Khiva thistle, Turkmen tulip, Antonia's gypsophila, Karelin sand acacia, and 55 other endemic species.

                                The reserve also incorporates two sanctuaries. The Sarykamysh Sanctuary, which was established in 1980 as a lake-coastal ecosystem for the protection of the beaches of the Sarykamysh Lake, flying-swimming birds, and as lambing place for gazelles. And the Shasenem Sanctuary which was established in 1984 for stony desert preservation and for the breeding and settling of Kulans (brought over here from Badhyz Nature reserve in the 1980s).

                                Hazar Nature Reserve



                                The reserve consists of areas on the south-east coast of the Caspian Sea and covers Turkmenbashi, Balkhan, North Cheleken and Mikhailov bays, which range from relatively deep to shallow. They are bordered by sandy and shelly spits and there are several islands, which are overgrown with halophytes and have coastal marshes. The largest of them is Dagada, which is 120 ha in area.



                                Five dominant aquatic plant species at the site - eelgrass, tassel-weed, pondweeds and Arabis - occur on the sandy soils and at depths to 4-5 m. There is a high diversity of algae (macrophytes) in the bays consisting of green algae (28 species), red algae (11 species) and kelp or brown algae (one species), which accumulate along the coast and at depths to 6m. Hundreds of species of microscopic algae can be found in the plankton and benthos.



                                The Hazar State Nature Reserve was previously (1968-1994) known as Krasnovodskiy State Nature Reserve. In 1994 a large island in the Caspian Sea - Ogurchinskiy Sanctuary was included in the Reserve. The total area of the Hazar State Nature Reserve is 268 037 ha.



                                The condition of the site as a wetland and the dynamics of bird numbers depend on processes linked to changes in the level of the Caspian Sea. Over the last 10-15 years the area of the wetland has increased significantly.



                                The global value of the reserve lies in the fact that its coastal waters and shores are a feeding and staging point during migration, and an over-wintering site for millions of waterfowl and water birds from a whole number of countries from Eurasia and Africa. The Central-Asian and Eastern-African migratory ways merge in the Turkmen part of the Caspian Sea, as a result of which the Reserve has a rich number of migratory and wintering birds.



                                The site qualifies as an Important Bird Area (IBA) and is located on one of the most important migratory flyways for water birds breeding in western Siberia, Kazakhstan and other regions of Central Asia, and provides a valuable stopover and wintering site.



                                In the 20th Century it was estimated that about 5 000 000-8 000 000 water birds passed along the eastern coast of the Caspian Sea on migration, and up to 800 000 birds wintered in the site. Between 1971 and 2005, the numbers of waterfowl (geese, swans, ducks and Common Coot) were recorded at the site. The dominant species are Common Coot (as many as 48 000), Common Teal (up to 27 000), Mallard (up to 21 000), Red-crested Pochard (up to 50 000), Common Pochard (up to 33 000), Tufted Duck (up to 20 000) and in some years, also Mute Swan and Whooper Swan. More than 25 000 Greater Flamingo (Phoenicopterus roseus) can occur on migration and in winter. A total of 296 species has been recorded, including 138 water bird species.



                                Several endemic and rare (listed in the IUCN Red List, see threat status in brackets) species occur in the site including the Caspian seal and several sturgeons.



                                Caspian Sea



                                The Caspian Sea is the largest enclosed body of water on Earth by area, variously classed as the world's largest lake or a full-fledged sea. Like the Black Sea, it is a remnant of the ancient Parathetys Sea. It became landlocked about 5.5 million years ago due to a tectonic uplift and a fall in sea levels. Over 130 rivers provide inflow to the Caspian, with the Volga and Ural Rivers being the largest. It has a salinity of approximately 1.2 %, about one third of most seawater. The only outflow of water is through condensation. The water level is currently measured to be 28 meters below sea level. Several salt marshes can be found along the coastline, such as the Karabogaz Gulf and lakes such as at Mollagara in Turkmenistan. Numerous kinds of sturgeons (for caviar), trout, white fish and the Caspian seal call the Caspian home.



                                To experience the natural beauty of some of the regions mentioned here, you will need to use four-wheel drive transport, be prepared to eat basic meals, stay in tents or basic housing conditions, and spend considerable time traveling on arduous dirt roads and mountain tracks. Furthermore, permits to access the reserves will have to be requested months in advance, and are not always granted.



                                Karakum Desert



                                Its area is nearly 350.000 sq. km, which is about 79 per cent of Turkmenistan’s territory. The desert is bordered in the north-west by the Ustyurt plateau, on the north- east by the Amu-Darya, on the south by the Murghab River oasis and on the west it nearly reaches the Caspian Sea. The Karakum desert is divided into three parts: Low (Central), Zunguz (Northern) and Southeast. The desert is rich not only in oil and gas but other mineral resources as well. A wide range of grey mounts dominate the landscape along the boundaries of the Zunguz Karakum. Those mounts hold deposits of sulphur. From the outside they are covered with a flint crust.



                                The landscape of the Karakum is very interesting. Only part of its territory is covered with sand. In the east there are ‘barkhans’ - mounts of loose sand of 15 to 35 m high. There are flat areas of broad expanses (takyrs) of clay soil. In contrast to sands ‘takyrs’ can keep moisture created by rains on a level of 25-30 m deep. However, in May moister reserves in the takyrs finish. So, ‘takyrs’ are called lifeless. Nothing is growing on it. The sand can keep winter moister and spring rains on the level of one meter deep. Desert acacia and poplar, white and black saksaul are growing in such areas. There are also ‘shors’, similar to above but encrusted with salt and relieved by solanaceae along their borders. A typical feature of the Karakum is a number of “old beds”, which may have been either channels of tributaries of the Oxus and other rivers, or depressions which contained salt lakes. Shifting dunes offer a continually changing desert landscape.



                                Spring in the Karakum Desert is fantastic - it doesn’t look like a desert at this time of a year. For more than two weeks it is covered with green, pink, yellow and red ‘carpets’ of different flowers - bright red poppies, gipecuum, sandy sedge, the bushes of astragalus and kandym.



                                This desert was recorded in many ancient chronicles, two thousand years ago Herodotus wrote about it. Desert life was quite different in those times. But some things didn’t change: up to today the desert is still the grazing ground for herds of sheep, goats and camels, and generously provides people with karakul pelts, wool, meat and camel’s milk.



                                If you are interested in such an authentic and rewarding experience, Turkmenistan Tourism can suggest several 4-wheel drive tour extensions to your original program. We have listed some of them in the Highlights section of this website. Contact us directly for more options.
                            </p>
                        </div>
                        {{-- Modal Button --}}
                        <button @click="isOpen = false" class="absolute top-3 right-4">
                            <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <hr class="my-20">


        {{-- Ahalteke horses --}}
        <section class="country-geography">
            <div class="country-geography-content flex flex-col justify-center items-center md:flex-row md:gap-20">
                <div x-data="{ isOpen: false }" class="country-geography-content__text md:w-1/2 select-none">
                    <h1 class="country-geography-content__text__header mb-5 text-3xl uppercase text-indigo-700 font-semibold underline-offset-4 underline">Ahalteke horses</h1>
                    <div class="country-geography-content__text__paragraph">
                        <p class="mb-3 text-md text-gray-600 text-justify select-none tracking-wide">
                            Experts say that nowhere in the world but in Turkmenistan nature and man’s efforts have succeeded in creating such a graceful, exceptional, tireless, sturdy, noble horse as the Akhal Teke. They are not only fast and of great endurance but also of peculiar royal beauty. These horses became one of the most striking illustrations of talent and mastery of Turkmen people. Turkmen are very proud of their horses.
                        </p>

                    </div>

                    <div class=" my-8 ">
                        <button x-cloak @click="isOpen=true" class="px-8 py-2.5  text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600 text-lg font-medium ">Read More...</button>
                    </div>
                    {{-- Modal --}}
                    <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem] h-[28rem]  p-6 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                        {{-- Modal Content --}}
                        <div class="modal-content  ">
                            <div class="mb-4"></div>
                            <p class=" capitalize tracking-wider text-gray-200 select-none">
                                Akhal Teke horses got their name from the Akhal oasis in the center of Turkmenistan, which is historically inhabited by one of the Turkmen tribes – the Teke. Through centuries the Teke were able to keep the purity of their horses, to polish their exterior, develop endless enormous stamina and the ability to withstand the extremeness of temperatures and harsh climate. Akhal Teke horses are notable for their dry constitution and well developed muscles of croup, a much longer neck than other horses, mobile thin ears, very expressive eyes, thin legs with strong sinews, tall and high withers, strong small hoofs and a unique golden-colored coating, possessing a brilliant metallic sheen, outstanding speed and highly developed nervous system.



                                This ancient breed helped to develop the Arabian, English, Orlov saddle horse, Karabakh, Donski, Persian, Pakistan, Indian and Afghan horses. The stallion Atti, born in 1784, occupies a central place in the history of Turkmen horse-breeding. In 1790 Atti was transported from Istanbul to Prussia, and used to improve horse breeds like the Trachen (Germany), the lonius (Hungary) and a few half-blood breeds in Czechoslovakia, Romania and Yugoslavia.



                                The origin of Akhal Teke horses stretches back to ancient times. Chinese called them ‘Heavenly horses’ or Divine Horses. Ancient Greek, Roman, Chinese and Arab chronicles mention the desires to obtain one of these superior horses, for example King Cyrus of Persia, Alexander the Great, and various Chinese emperors and Arab rulers.



                                Akhal Teke horses have been immortalized in Turkmen traditional songs, proverbs and poems. Their intelligence, wisdom and attachment to human beings are all legendary. One Turkmen proverb says, “When you get up in the morning you must greet your father and your horse”. Turkmen horse-breeders (seys) had a special approach to their horses. Each Turkmen kept one horse. They were never herded and Turkmens kept them tethered. They fed them pellets of food that contained a mixture of alfalfa, barley and mutton fat. Historians noted that “The Turkmen do not only nourish tenderly their horses, but also with passion. To treat a horse badly is considered a sin among them. The whole tribe would scorn a person committing such a sin.” For this reason, of all Central Asian peoples, Turkmen are the only ones who never slaughtered a horse for its meat or drank mare’s milk.



                                After the Bolshevik Revolution the Akhal Teke horses experienced a very difficult period in their history. During collectivization efforts all Akhal Teke horses were registered with the new Soviet government and private ownership of horses was banned.



                                By the end of the 20th century this ancient and unique horse breed was in danger of extinction. The policy of Saparmurad Turkmenbashi - the first president of independent Turkmenistan, helped to prevent this. In 1986 he issued a decree permitting to keep Akhal Teke horses on private farmsteads.



                                The Akhal Teke is an excellent sport horse. It is perfect in marathon racing; dressage, breaking in and flat race conquer. In 1935 thirty Turkmen riders with their horses made a very long trek and covered 4,300 km from Ashgabat to Moscow in 84 days. All horses successfully overcame the difficulties of this trek, the major part of which run through the Karakum and other desert terrain. Shortly afterwards the Akhal Teke stallion Zenith set a record by covering 300 km in 19 hours. The Akhal Teke proved itself as an endurance horse. If necessary, the Akhal Teke can stay without food and water for much longer than other horses and could easily endure terrible heat.



                                In 1960 at the Rome Olympics the Akhal Teke stallion Absent, ridden by Sergei Filatov won a gold medal in dressage and was called ’Horse of the century’. Later at the Mexico Olympics a new rider on Absent became champion in team riding. The whole world admires and applauds the circus ensemble ’Horsemen from sunny Turkmenistan”, which perform on Akhal Teke horses.



                                Nothing can really compare with the experience of horse riding. Each of us, at least once in our lives, has perhaps dreamt of riding a horse. This dream can easily come true in Turkmenistan, which is justly famous for its elegant horses. Both veteran equestrians and those less experienced will find a good possibility to ride well trained and mannered horses at private stables outside Ashgabat.



                                Our travel agency can organize a visit to these private stables or offer cross-country horse treks. You’ll ride under the watchful eye of highly qualified instructors and experience the solitude of the Kopetdag Mountains and the Karakum Desert. The peace and beauty of the nature will be one of the highlights of your stay in Turkmenistan.



                                Contact us for more details on horse riding tours, but also about attending horse races that take place every Sunday during spring and autumn at the National Hippodrome in Ashgabat.



                                The last week ending on the last Sunday of April has formally been devoted to the famous Turkmen horses. Contact us for exact program details during that week.
                            </p>
                        </div>
                        {{-- Modal Button --}}
                        <button @click="isOpen = false" class="absolute top-3 right-4">
                            <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                            </svg>
                        </button>
                    </div>
                </div>
                {{-- Ahalteke horses Img --}}
                <div class="country-geography__img h-full mb-3 md:w-1/2 flex justify-center items-center">
                    <img class=" md:w-fit md:h-[32rem] object-contain shadow-md shadow-gray-600 rounded" src="{{asset('images/country_about/Turkmenistan-tourism-arts-horse.webp')}}" alt="">
                </div>
            </div>
        </section>
    </section>

    <hr class="my-10">

    {{--PRACTICAL INFORMATION --}}
    <section class="practical-information">

        {{-- Header --}}
        <header class="flex justify-center items-center mb-12">
            <h1 class="text-xl lg:text-5xl uppercase text-indigo-700 font-semibold "> PRACTICAL INFORMATION </h1>
        </header>

        {{-- Content Card --}}
        <div class="tour-cards flex flex-col justify-center items-center md:flex-row gap-8 flex-wrap">

            {{-- Card1 --}}
            <div x-data="{ isOpen:false }" class=" w-96 bg-white rounded shadow ">
                <img class="object-cover object-center w-full h-56" src="{{asset('images/practigal_information/Turkmenistan-tourism-climate.webp')}}" alt="avatar">
                <div class="flex items-center justify-between px-6 py-3 bg-gray-800">
                    <h1 class="text-lg font-semibold text-white  hover:transition-all">Climate</h1>
                    <button @click="isOpen = true" class="flex  items-center justify-center p-2 bg-indigo-500 hover:bg-indigo-600 rounded-full  transition-all">
                        <svg class="card-header__icon w-3 h-3 text-white  fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z" />
                        </svg>
                    </button>
                </div>

                <div class="px-6 py-4">
                    <p class="py-2 text-gray-500">The climate is sharply continental with little rainfall during summer. Summer is dry. Precipitation is low - about 240 mm a year. With over 250 days of sunshine, Turkmenistan is often called the country of eternal sunshine.</p>
                </div>
                {{-- Modal --}}
                <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem] h-[28rem]  p-6 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                    {{-- Modal Content --}}
                    <div class="modal-content  ">
                        <div class="mb-4"></div>
                        <p class=" capitalize tracking-wider text-gray-200 select-none">
                            Midsummer temperature can reach 50 degrees C. Winter is mild with average temperatures below freezing for only a few days in January and February. However, in the north of the country winter is severe. January temperatures in Dashoguz average - 23 degrees Celsius. Most rainfall occurs in the months of March and April.
                        </p>
                    </div>
                    {{-- Modal Button --}}
                    <button @click="isOpen = false" class="absolute top-3 right-4">
                        <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Card2 --}}
            <div x-data="{ isOpen:false }" class=" w-96 bg-white rounded shadow ">

                <img class="object-cover object-center w-full h-56" src="{{asset('images/practigal_information/Turkmenistan-tourism-electricity.webp')}}" alt="avatar">
                <div class="flex items-center justify-between px-6 py-3 bg-gray-800">
                    <h1 class="text-lg font-semibold text-white  hover:transition-all">Electricity</h1>
                    <button @click="isOpen = true" class="flex  items-center justify-center p-2 bg-indigo-500 hover:bg-indigo-600 rounded-full  transition-all">
                        <svg class="card-header__icon w-3 h-3 text-white  fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z" />
                        </svg>
                    </button>
                </div>

                <div class="px-6 py-4">
                    <p class="py-2 text-gray-500">
                        Here country the standard voltage is 220 V. The standard frequency is 50 Hz. The power sockets that are used are of type C/F. Your need for an adapter depends on the voltage, frequency and power plugs in the country you live in.</p>
                </div>
                {{-- Modal --}}
                <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem] h-[28rem]  p-6 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                    {{-- Modal Content --}}
                    <div class="modal-content  ">
                        <div class="mb-4"></div>
                        <div class="">
                            <h1 class=" text-lg text-gray-400 font-semibold">Voltage and frequency</h1>
                            <p class=" capitalize tracking-wider text-gray-300 select-none">
                                You can use your appliances in Turkmenistan, if the standard voltage in your country is in between 220V - 240V (as in the UK, Europe, Australia and most of Asia and Africa). If the standard voltage in your country is in the range of 100V - 127V (as in the US, Canada and most South American countries), you need a power converter. To be sure, check the label on the appliance. If it states 'INPUT: 100-240V, 50/60 Hz', it can be used in all countries of the world (like chargers for tablets/laptops, photo cameras, cell phones, toothbrushes).
                                If the frequency in Uzbekistan (50 Hz) differs from the one in your country, it is not advised to use your appliances. But at your own risk, you can try. Be extra careful with moving, rotating and time related appliances like clocks and electric fan heaters.
                            </p>
                        </div>
                        <div class="mt-8">
                            <h1 class=" text-lg text-gray-400 font-semibold">Power sockets and plugs</h1>
                            <p class=" capitalize tracking-wider text-gray-300 select-none">
                                In Uzbekistan the power sockets used are of type C / F:
                                Your need for a power plug adapter depends also on the country you live in. Check this map to see the use of different plugs and sockets in the world.
                            </p>
                        </div>

                        <div class="mt-8">
                            <h1 class=" text-lg text-gray-400 font-semibold">Presence and absence of electricity </h1>
                            <p class=" capitalize tracking-wider text-gray-300 select-none">
                                Electricity is available in the vast majority of populated areas of Turkmenistan, with the exception of small desert settlements far away from the main roads, such as Damla, Akmolla, Murzachirla, Melegoch and Balishem) and most historical sites. Power supply is also not available at Darwaza and inside the Yangikala Canyons.
                                In hotels, motels, guesthouses and pilgrim guesthouses, electricity is available, but at camp locations there is no power supply.
                                It is advisable to bring extra camera batteries, especially if your journey in Turkmenistan includes desert safaris and at least 2 consecutive nights of camp accommodation.
                            </p>
                        </div>

                        <div class="mt-8">
                            <h1 class=" text-lg text-gray-400 font-semibold"> </h1>
                            <p class=" capitalize tracking-wider text-gray-300 select-none">

                            </p>
                        </div>


                        <div class="mt-8">
                            <h1 class=" text-lg text-gray-400 font-semibold"> </h1>
                            <p class=" capitalize tracking-wider text-gray-300 select-none">

                            </p>
                        </div>


                        <div class="mt-8">
                            <h1 class=" text-lg text-gray-400 font-semibold"> </h1>
                            <p class=" capitalize tracking-wider text-gray-300 select-none">

                            </p>
                        </div>

                    </div>
                    {{-- Modal Button --}}
                    <button @click="isOpen = false" class="absolute top-3 right-4">
                        <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                        </svg>
                    </button>
                </div>
            </div>


            {{-- Card3 Communication --}}
            <div x-data="{ isOpen:false }" class=" w-96 bg-white rounded shadow ">
                <img class="object-cover object-center w-full h-56" src="{{asset('images/practigal_information/Turkmenistan-tourism-comuniccation.webp')}}" alt="avatar">
                <div class="flex items-center justify-between px-6 py-3 bg-gray-800">
                    <h1 class="text-lg font-semibold text-white  hover:transition-all">Communication</h1>
                    <button @click="isOpen = true" class="flex  items-center justify-center p-2 bg-indigo-500 hover:bg-indigo-600 rounded-full  transition-all">
                        <svg class="card-header__icon w-3 h-3 text-white  fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z" />
                        </svg>
                    </button>
                </div>

                <div class="px-6 py-4">
                    <p class="py-2 text-gray-500">
                        International telephone calls can be made from most hotels, although prices are very high in comparison to public Call Centers. Another option is the Internet, which is available at most *** and **** hotels with in Ashgabat.
                    </p>
                </div>
                {{-- Modal --}}
                <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem] h-[28rem]  p-6 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                    {{-- Modal Content --}}
                    <div class="modal-content  ">
                        <div class="mb-4"></div>
                        <p class=" capitalize tracking-wider text-gray-200 select-none">
                            In ***** hotels Wi-Fi Internet is available, but it is best to seek information from our agency team if the hotel you select has Wi-Fi Internet, prior to bringing a laptop or tablet with you.
                            Please note that not all foreign mobile service providers have a service contract with a mobile phone provider inside Turkmenistan, and that your mobile phone may therefore not operate during your stay in Turkmenistan (and if it does, it will mainly be in the most densely populated areas only). The cell phone provider in Turkmenistan with service agreements with other foreign providers is called TMCELL. You can contact your own service provider to ask for an update on their service contract with TMCELL.
                        </p>
                    </div>
                    {{-- Modal Button --}}
                    <button @click="isOpen = false" class="absolute top-3 right-4">
                        <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                        </svg>
                    </button>
                </div>
            </div>


            {{-- Card4 Health --}}
            <div x-data="{ isOpen:false }" class=" w-96 bg-white rounded shadow ">
                <img class="object-cover object-center w-full h-56" src="{{asset('images/practigal_information/Turkmenistan-tourism-health.webp')}}" alt="avatar">
                <div class="flex items-center justify-between px-6 py-3 bg-gray-800">
                    <h1 class="text-lg font-semibold text-white  hover:transition-all">Health</h1>
                    <button @click="isOpen = true" class="flex  items-center justify-center p-2 bg-indigo-500 hover:bg-indigo-600 rounded-full  transition-all">
                        <svg class="card-header__icon w-3 h-3 text-white  fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z" />
                        </svg>
                    </button>
                </div>

                <div class="px-6 py-4">
                    <p class="py-2 text-gray-500">
                        Sun stroke and dehydration are the two main risks to your health in the Turkmen sunshine. A head cover and drinking sufficient fluids (water, juice, soda, tea, soup, etc) will largely protect you against these risks.
                    </p>
                </div>
                {{-- Modal --}}
                <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem] h-[28rem]  p-6 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                    {{-- Modal Content --}}
                    <div class="modal-content  ">
                        <div class="mb-4"></div>
                        <p class=" capitalize tracking-wider text-gray-200 select-none">
                            The Turkmen diet is varied, and includes both meat dishes and soups, and as well as plenty of fruits and vegetables. However, it is advisable to bring sachets of ORS, travel tablets and anti-diarrhea tablets with you.
                            In Turkmenistan there are plenty of pharmacies, and many are open 24/7. Yet, for particular personal health matters, it is better to bring your own medication from home. In case you are carrying medication on prescription, it is recommended that you bring a copy of your doctor’s prescription, in case customs officials request to see such.
                            Any medications containing tramadol, morphine, opiates or any other similar constituent component that may be considered as narcotic drug, which is widely used as pain medication in a number of countries worldwide, have been prohibited from import into Turkmenistan or transfer across the territory of the country, except when a doctor’s prescription and pharmaceutical passport can be shown, that clearly indicates that the specific person requires this specific medication. Both documents must be in English language, and must be signed and stamped by the relevant medical authority in the country of the person’s origin.
                        </p>
                    </div>
                    {{-- Modal Button --}}
                    <button @click="isOpen = false" class="absolute top-3 right-4">
                        <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                        </svg>
                    </button>
                </div>
            </div>


            {{-- Card5 --}}
            <div x-data="{ isOpen:false }" class=" w-96 bg-white rounded shadow ">
                <img class="object-cover object-center w-full h-56" src="{{asset('images/practigal_information/Turkmenistan-tourism-currency.webp')}}" alt="avatar">
                <div class="flex items-center justify-between px-6 py-3 bg-gray-800">
                    <h1 class="text-lg font-semibold text-white  hover:transition-all">Currency</h1>
                    <button @click="isOpen = true" class="flex  items-center justify-center p-2 bg-indigo-500 hover:bg-indigo-600 rounded-full  transition-all">
                        <svg class="card-header__icon w-3 h-3 text-white  fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z" />
                        </svg>
                    </button>
                </div>

                <div class="px-6 py-4">
                    <p class="py-2 text-gray-500">
                        The climate is sharply continental with little rainfall during summer. Summer is dry. Precipitation is low - about 240 mm a year. With over 250 days of sunshine, Turkmenistan is often called the country of eternal sunshine.</p>
                    </p>
                </div>
                {{-- Modal --}}
                <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem] h-[28rem]  p-6 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                    {{-- Modal Content --}}
                    <div class="modal-content  ">
                        <div class="mb-4"></div>
                        <p class=" capitalize tracking-wider text-gray-200 select-none">
                            You can exchange US Dollars (preferably clean undamaged banknotes printed in or after 1996) into manat at banks, and in exchange offices at major hotels, bazaars, airports and railway stations. A selection of banks and hotels in Ashgabat is also able to exchange Euros.
                            When entering the country all you need to do is fill in the type and amount of foreign currency you carry with you on the custom’s declaration form. Excess Turkmen currency can be exchanged for foreign currency at the currency exchange bureaus in major hotels, banks and at the international airport upon departure. When departing from the country you then fill out the custom’s declaration form with your remaining type and amount of foreign currency you have on you.
                            Currently credit cards can be used as mode of payment only in a small selection of five-star hotels. Inform beforehand about the possibility of using this option, and certainly do not rely on it as your only mode of payment within Turkmenistan. In Ashgabat only you can use your MasterCard or Visa to cash US dollars (during working days and office hours only).
                            Western Union is well represented in the six major cities of the country, and can be used to send or withdraw cash US dollars.
                        </p>
                    </div>
                    {{-- Modal Button --}}
                    <button @click="isOpen = false" class="absolute top-3 right-4">
                        <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Card6 --}}
            <div x-data="{ isOpen:false }" class=" w-96 bg-white rounded shadow ">
                <img class="object-cover object-center w-full h-56" src="{{asset('images/practigal_information/Turkmenistan-tourism-safety.webp')}}" alt="avatar">
                <div class="flex items-center justify-between px-6 py-3 bg-gray-800">
                    <h1 class="text-lg font-semibold text-white  hover:transition-all">Safety</h1>
                    <button @click="isOpen = true" class="flex  items-center justify-center p-2 bg-indigo-500 hover:bg-indigo-600 rounded-full  transition-all">
                        <svg class="card-header__icon w-3 h-3 text-white  fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z" />
                        </svg>
                    </button>
                </div>

                <div class="px-6 py-4">
                    <p class="py-2 text-gray-500">
                        Travel in Turkmenistan is entirely safe.
                        Turkmens adhere to a moderate form of Islam, and are respectful to people of other religions. Local traditions and customs continue to play an important role...
                    </p>
                </div>
                {{-- Modal --}}
                <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem] h-[28rem]  p-6 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                    {{-- Modal Content --}}
                    <div class="modal-content  ">
                        <div class="mb-4"></div>
                        <p class=" capitalize tracking-wider text-gray-200 select-none">
                            Local traditions and customs continue to play an important role in the lives of the people. Many Turkmen women wear a large variety of colorful headscarves of their own choice and long colorful, embroidered dresses. Western dress is equally widely accepted.
                            Tourists intending to travel to Turkmenistan using their own means of transport (vehicle or motor bicycle) are recommended to contact our company directly for details about the related customs procedures, and about the specifics of road rules in the country.
                        </p>
                    </div>
                    {{-- Modal Button --}}
                    <button @click="isOpen = false" class="absolute top-3 right-4">
                        <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                        </svg>
                    </button>
                </div>
            </div>


            {{-- Card7 Holidays--}}
            <div x-data="{ isOpen:false }" class=" w-96 bg-white rounded shadow ">
                <img class="object-cover object-center w-full h-56" src="{{asset('images/practigal_information/Turkmenistan-tourism-holidays.webp')}}" alt="avatar">
                <div class="flex items-center justify-between px-6 py-3 bg-gray-800">
                    <h1 class="text-lg font-semibold text-white  hover:transition-all">Holidays</h1>
                    <button @click="isOpen = true" class="flex  items-center justify-center p-2 bg-indigo-500 hover:bg-indigo-600 rounded-full  transition-all">
                        <svg class="card-header__icon w-3 h-3 text-white  fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z" />
                        </svg>
                    </button>
                </div>

                <div class="px-6 py-4">
                    <p class="py-2 text-gray-500">
                        Turkmenistan is known throughout the world for its holidays. here you will have the opportunity to see a variety of traditions of the people. Many social events will not make you bored. There really is a lot to see here!
                    </p>
                </div>
                {{-- Modal --}}
                <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem] h-[28rem]  p-6 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                    {{-- Modal Content --}}
                    <div class="modal-content  ">
                        <div class="mb-4"></div>
                        <p class=" capitalize tracking-wider text-gray-200 select-none">
                        <table class="border-collapse  border border-gray-200 mx-auto">
                            <thead>
                                <tr>
                                    <th class="border border-gray-200 text-gray-50 w-1/2">
                                        Holiday Dates
                                    </th>
                                    <th class="border border-gray-200 text-gray-50 w-1/2">
                                        Holiday Names
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        31 December & 1 January
                                    </td>
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        New Year's
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        8 March
                                    </td>
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        International Women's Day
                                    </td>
                                </tr>

                                <tr class="">
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        20-21 March
                                    </td>
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Novruz Bayram, national spring holiday
                                    </td>
                                </tr>

                                <tr class="">
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        First Sunday in April
                                    </td>
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        'A Drop of Water-A Grain of Gold' Festival
                                    </td>
                                </tr>

                                <tr class="">
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        7 April
                                    </td>
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Health Day
                                    </td>
                                </tr>

                                <tr class="">
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Last Sunday in April
                                    </td>
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Turkmen Racing Horse Festival
                                    </td>
                                </tr>

                                <tr class="">
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        9 May
                                    </td>
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Victory Day (World War II)
                                    </td>
                                </tr>

                                <tr class="">
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        18 May
                                    </td>
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        State Flag and Constitution Day
                                    </td>
                                </tr>

                                <tr class="">
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Last Sunday in May
                                    </td>
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Turkmen Carpet Festival
                                    </td>
                                </tr>

                                <tr class="">
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Third Sunday in July
                                    </td>
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Galla Bayramy Festival
                                    </td>
                                </tr>

                                <tr class="">
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Second Sunday in August
                                    </td>
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Turkmen Melon Day
                                    </td>
                                </tr>

                                <tr class="">
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Second Saturday in September
                                    </td>
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Day of the Workers in the Oil, Gas, Power, and Geological Industry
                                    </td>
                                </tr>

                                <tr class="">
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Second Sunday in September
                                    </td>
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Turkmen Bakhshi Day
                                    </td>
                                </tr>

                                <tr class="">
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        27 September
                                    </td>
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Independence Day
                                    </td>
                                </tr>

                                <tr class="">
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        6 October
                                    </td>
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Day of Commemoration and National Mourning ('Earthquake Commemoration Day')
                                    </td>
                                </tr>

                                <tr class="">
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Last Sunday in November
                                    </td>
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Harvest Festival, Good Neighborliness Day
                                    </td>
                                </tr>

                                <tr class="">
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        12 December
                                    </td>
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Day of Neutrality and Day of Student Youth
                                    </td>
                                </tr>


                                <tr class="">
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Oraza (Ramadan)
                                    </td>
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        <p>
                                            02.04-02.05.2022
                                        </p>

                                        <p>
                                            22.03-21.04.2023
                                        </p>

                                        <p>
                                            10.03-09.04.2024
                                        </p>
                                    </td>
                                </tr>

                                <tr class="">
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Oraza Bayram (Eid ul-Fitr)
                                    </td>
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        <p>
                                            03.05.2022
                                        </p>
                                        <p>
                                            22.04.2023
                                        </p>
                                        <p>
                                            10.04.2024
                                        </p>
                                    </td>
                                </tr>

                                <tr class="">
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        Kurban Bayram (Eid ul-Adha)
                                    </td>
                                    <td class="border px-2 border-gray-200 text-gray-50 w-1/2">
                                        <p>
                                            09-11.07.2022
                                        </p>
                                        <p>
                                            28-30.07.2023
                                        </p>
                                        <p>
                                            16-18.06.2024
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </p>
                    </div>
                    {{-- Modal Button --}}
                    <button @click="isOpen = false" class="absolute top-3 right-4">
                        <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                        </svg>
                    </button>
                </div>
            </div>


            {{-- Card8 Language--}}
            <div x-data="{ isOpen:false }" class=" w-96 bg-white rounded shadow ">
                <img class="object-cover object-center w-full h-56" src="{{asset('images/practigal_information/Turkmenistan-tourism-language.webp')}}" alt="avatar">
                <div class="flex items-center justify-between px-6 py-3 bg-gray-800">
                    <h1 class="text-lg font-semibold text-white  hover:transition-all">Language</h1>
                    <button @click="isOpen = true" class="flex  items-center justify-center p-2 bg-indigo-500 hover:bg-indigo-600 rounded-full  transition-all">
                        <svg class="card-header__icon w-3 h-3 text-white  fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z" />
                        </svg>
                    </button>
                </div>

                <div class="px-6 py-4">
                    <p class="py-2 text-gray-500">
                        The climate is sharply continental with little rainfall during summer. Summer is dry. Precipitation is low - about 240 mm a year. With over 250 days of sunshine, Turkmenistan is often called the country of eternal sunshine.</p>
                    </p>
                </div>
                {{-- Modal --}}
                <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem] h-[28rem]  p-6 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                    {{-- Modal Content --}}
                    <div class="modal-content  ">
                        <div class="mb-4"></div>
                        <p class=" capitalize tracking-wider text-gray-200 select-none">
                            While the post-independence generation is increasingly speaking other foreign languages such as English, French and Turkish, you will still find it rewarding to travel and communicate with the assistance of a translator/guide.
                            While the National History and Ethnography Museum and the Carpet Museum in Ashgabat offer good guided museum tours in a variety of languages, and the staff of most hotels with three stars and up will speak some English, few other sites of interest in the country offer more than basic information in foreign languages.
                            It is for this reason that Turkmenistan Tourism employs a team of guides/translators that can accompany you on your tour through Turkmenistan and that will be able to bring alive the country’s sites and help meet its friendly people.
                        </p>
                    </div>
                    {{-- Modal Button --}}
                    <button @click="isOpen = false" class="absolute top-3 right-4">
                        <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </section>
    <hr class="my-10 border-none">
</main>

@endsection



@extends('layouts.front.footer')

@push('js')

<script>

</script>

@endpush