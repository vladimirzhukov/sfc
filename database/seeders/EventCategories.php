<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventCategories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'parent_id' => 0,
                'slug' => 'networking-events',
                'name' => 'Networking Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Networking Events',
                    'de' => 'Netzwerkveranstaltungen',
                    'es' => 'Eventos de Networking',
                    'pl' => 'Wydarzenia Networkingowe'
                ]),
                'scom' => 'Events focused on building professional connections and networking opportunities',
                'scom_translations' => json_encode([
                    'en' => 'Events focused on building professional connections and networking opportunities',
                    'de' => 'Veranstaltungen, die auf den Aufbau professioneller Verbindungen und Networking-Möglichkeiten abzielen',
                    'es' => 'Eventos enfocados en construir conexiones profesionales y oportunidades de networking',
                    'pl' => 'Wydarzenia skoncentrowane na budowaniu profesjonalnych połączeń i możliwościach networkingu'
                ])
            ],
            [
                'id' => 2,
                'parent_id' => 0,
                'slug' => 'pitch-competition-events',
                'name' => 'Pitch & Competition Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Pitch & Competition Events',
                    'de' => 'Pitch- und Wettbewerbsveranstaltungen',
                    'es' => 'Eventos de Pitch y Competencia',
                    'pl' => 'Wydarzenia Pitch i Konkursowe'
                ]),
                'scom' => 'Events where startups can present their ideas and compete for prizes',
                'scom_translations' => json_encode([
                    'en' => 'Events where startups can present their ideas and compete for prizes',
                    'de' => 'Veranstaltungen, bei denen Startups ihre Ideen präsentieren und um Preise konkurrieren können',
                    'es' => 'Eventos donde las startups pueden presentar sus ideas y competir por premios',
                    'pl' => 'Wydarzenia, na których startupy mogą prezentować swoje pomysły i rywalizować o nagrody'
                ])
            ],
            [
                'id' => 3,
                'parent_id' => 0,
                'slug' => 'educational-learning-events',
                'name' => 'Educational & Learning Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Educational & Learning Events',
                    'de' => 'Bildungs- und Lernveranstaltungen',
                    'es' => 'Eventos Educativos y de Aprendizaje',
                    'pl' => 'Wydarzenia Edukacyjne i Szkoleniowe'
                ]),
                'scom' => 'Events focused on knowledge sharing, workshops, and educational sessions',
                'scom_translations' => json_encode([
                    'en' => 'Events focused on knowledge sharing, workshops, and educational sessions',
                    'de' => 'Veranstaltungen, die sich auf Wissensaustausch, Workshops und Bildungssitzungen konzentrieren',
                    'es' => 'Eventos enfocados en compartir conocimientos, talleres y sesiones educativas',
                    'pl' => 'Wydarzenia skoncentrowane na dzieleniu się wiedzą, warsztatach i sesjach edukacyjnych'
                ])
            ],
            [
                'id' => 4,
                'parent_id' => 0,
                'slug' => 'conferences-summits',
                'name' => 'Conferences & Summits',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Conferences & Summits',
                    'de' => 'Konferenzen und Gipfeltreffen',
                    'es' => 'Conferencias y Cumbres',
                    'pl' => 'Konferencje i Szczyty'
                ]),
                'scom' => 'Events that bring together industry leaders, experts, and innovators for discussions and networking',
                'scom_translations' => json_encode([
                    'en' => 'Events that bring together industry leaders, experts, and innovators for discussions and networking',
                    'de' => 'Veranstaltungen, die Branchenführer, Experten und Innovatoren für Diskussionen und Networking zusammenbringen',
                    'es' => 'Eventos que reúnen a líderes de la industria, expertos e innovadores para discusiones y networking',
                    'pl' => 'Wydarzenia, które gromadzą liderów branży, ekspertów i innowatorów do dyskusji i networkingu'
                ])
            ],
            [
                'id' => 5,
                'parent_id' => 0,
                'slug' => 'investor-events',
                'name' => 'Investor Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Investor Events',
                    'de' => 'Investorenveranstaltungen',
                    'es' => 'Eventos para Inversores',
                    'pl' => 'Wydarzenia dla Inwestorów'
                ]),
                'scom' => 'Events designed to connect startups with potential investors and funding opportunities',
                'scom_translations' => json_encode([
                    'en' => 'Events designed to connect startups with potential investors and funding opportunities',
                    'de' => 'Veranstaltungen, die darauf abzielen, Startups mit potenziellen Investoren und Finanzierungsmöglichkeiten zu verbinden',
                    'es' => 'Eventos diseñados para conectar startups con inversores potenciales y oportunidades de financiación',
                    'pl' => 'Wydarzenia zaprojektowane w celu połączenia startupów z potencjalnymi inwestorami i możliwościami finansowania'
                ])
            ],
            [
                'id' => 6,
                'parent_id' => 0,
                'slug' => 'accelerator-incubator-events',
                'name' => 'Accelerator & Incubator Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Accelerator & Incubator Events',
                    'de' => 'Accelerator- und Inkubatorveranstaltungen',
                    'es' => 'Eventos de Aceleradoras e Incubadoras',
                    'pl' => 'Wydarzenia Akceleratorów i Inkubatorów'
                ]),
                'scom' => 'Events that provide support, mentorship, and resources for startups in their early stages',
                'scom_translations' => json_encode([
                    'en' => 'Events that provide support, mentorship, and resources for startups in their early stages',
                    'de' => 'Veranstaltungen, die Unterstützung, Mentoring und Ressourcen für Startups in ihren frühen Phasen bieten',
                    'es' => 'Eventos que brindan apoyo, mentoría y recursos para startups en sus primeras etapas',
                    'pl' => 'Wydarzenia, które zapewniają wsparcie, mentoring i zasoby dla startupów we wczesnych etapach'
                ])
            ],
            [
                'id' => 7,
                'parent_id' => 0,
                'slug' => 'industry-specific-events',
                'name' => 'Industry-Specific Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Industry-Specific Events',
                    'de' => 'Branchenspezifische Veranstaltungen',
                    'es' => 'Eventos Específicos de la Industria',
                    'pl' => 'Wydarzenia Specyficzne dla Branży'
                ]),
                'scom' => 'Events tailored to specific industries, focusing on niche markets and specialized networking',
                'scom_translations' => json_encode([
                    'en' => 'Events tailored to specific industries, focusing on niche markets and specialized networking',
                    'de' => 'Veranstaltungen, die auf bestimmte Branchen zugeschnitten sind und sich auf Nischenmärkte und spezialisiertes Networking konzentrieren',
                    'es' => 'Eventos adaptados a industrias específicas, centrados en mercados nicho y networking especializado',
                    'pl' => 'Wydarzenia dostosowane do konkretnych branż, koncentrujące się na niszowych rynkach i specjalistycznym networkingu'
                ])
            ],
            [
                'id' => 8,
                'parent_id' => 0,
                'slug' => 'mentorship-advisory-events',
                'name' => 'Mentorship & Advisory Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Mentorship & Advisory Events',
                    'de' => 'Mentoring- und Beratungsveranstaltungen',
                    'es' => 'Eventos de Mentoría y Asesoría',
                    'pl' => 'Wydarzenia Mentoringowe i Doradcze'
                ]),
                'scom' => 'Events that connect startups with mentors and advisors for guidance and support',
                'scom_translations' => json_encode([
                    'en' => 'Events that connect startups with mentors and advisors for guidance and support',
                    'de' => 'Veranstaltungen, die Startups mit Mentoren und Beratern für Anleitung und Unterstützung verbinden',
                    'es' => 'Eventos que conectan startups con mentores y asesores para orientación y apoyo',
                    'pl' => 'Wydarzenia, które łączą startupy z mentorami i doradcami w celu uzyskania wskazówek i wsparcia'
                ])
            ],
            [
                'id' => 9,
                'parent_id' => 0,
                'slug' => 'product-technology-events',
                'name' => 'Product & Technology Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Product & Technology Events',
                    'de' => 'Produkt- und Technologieveranstaltungen',
                    'es' => 'Eventos de Producto y Tecnología',
                    'pl' => 'Wydarzenia Produktowe i Technologiczne'
                ]),
                'scom' => 'Events showcasing new products, technologies, and innovations in the startup ecosystem',
                'scom_translations' => json_encode([
                    'en' => 'Events showcasing new products, technologies, and innovations in the startup ecosystem',
                    'de' => 'Veranstaltungen, die neue Produkte, Technologien und Innovationen im Startup-Ökosystem präsentieren',
                    'es' => 'Eventos que muestran nuevos productos, tecnologías e innovaciones en el ecosistema de startups',
                    'pl' => 'Wydarzenia prezentujące nowe produkty, technologie i innowacje w ekosystemie startupów'
                ])
            ],
            [
                'id' => 10,
                'parent_id' => 0,
                'slug' => 'hackathons-innovation-events',
                'name' => 'Hackathons & Innovation Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Hackathons & Innovation Events',
                    'de' => 'Hackathons und Innovationsveranstaltungen',
                    'es' => 'Hackatones y Eventos de Innovación',
                    'pl' => 'Hackathony i Wydarzenia Innowacyjne'
                ]),
                'scom' => 'Events that encourage collaboration and innovation through coding challenges and creative problem-solving',
                'scom_translations' => json_encode([
                    'en' => 'Events that encourage collaboration and innovation through coding challenges and creative problem-solving',
                    'de' => 'Veranstaltungen, die Zusammenarbeit und Innovation durch Programmierwettbewerbe und kreatives Problemlösen fördern',
                    'es' => 'Eventos que fomentan la colaboración y la innovación a través de desafíos de codificación y resolución creativa de problemas',
                    'pl' => 'Wydarzenia, które zachęcają do współpracy i innowacji poprzez wyzwania programistyczne i kreatywne rozwiązywanie problemów'
                ])
            ],
            [
                'id' => 11,
                'parent_id' => 0,
                'slug' => 'community-culture-events',
                'name' => 'Community & Culture Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Community & Culture Events',
                    'de' => 'Gemeinschafts- und Kulturveranstaltungen',
                    'es' => 'Eventos de Comunidad y Cultura',
                    'pl' => 'Wydarzenia Społecznościowe i Kulturalne'
                ]),
                'scom' => 'Events that celebrate community, culture, and social impact within the startup ecosystem',
                'scom_translations' => json_encode([
                    'en' => 'Events that celebrate community, culture, and social impact within the startup ecosystem',
                    'de' => 'Veranstaltungen, die Gemeinschaft, Kultur und sozialen Einfluss im Startup-Ökosystem feiern',
                    'es' => 'Eventos que celebran la comunidad, la cultura y el impacto social dentro del ecosistema de startups',
                    'pl' => 'Wydarzenia, które celebrują społeczność, kulturę i wpływ społeczny w ekosystemie startupów'
                ])
            ],
            [
                'id' => 12,
                'parent_id' => 0,
                'slug' => 'sales-marketing-events',
                'name' => 'Sales & Marketing Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Sales & Marketing Events',
                    'de' => 'Vertriebs- und Marketingveranstaltungen',
                    'es' => 'Eventos de Ventas y Marketing',
                    'pl' => 'Wydarzenia Sprzedażowe i Marketingowe'
                ]),
                'scom' => 'Events focused on sales strategies, marketing techniques, and customer engagement',
                'scom_translations' => json_encode([
                    'en' => 'Events focused on sales strategies, marketing techniques, and customer engagement',
                    'de' => 'Veranstaltungen, die sich auf Vertriebsstrategien, Marketingtechniken und Kundenbindung konzentrieren',
                    'es' => 'Eventos enfocados en estrategias de ventas, técnicas de marketing y compromiso del cliente',
                    'pl' => 'Wydarzenia skoncentrowane na strategiach sprzedaży, technikach marketingowych i zaangażowaniu klientów'
                ])
            ],
            [
                'id' => 13,
                'parent_id' => 0,
                'slug' => 'legal-compliance-events',
                'name' => 'Legal & Compliance Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Legal & Compliance Events',
                    'de' => 'Rechts- und Compliance-Veranstaltungen',
                    'es' => 'Eventos Legales y de Cumplimiento',
                    'pl' => 'Wydarzenia Prawne i Zgodności'
                ]),
                'scom' => 'Events that provide insights into legal requirements, compliance issues, and regulatory frameworks for startups',
                'scom_translations' => json_encode([
                    'en' => 'Events that provide insights into legal requirements, compliance issues, and regulatory frameworks for startups',
                    'de' => 'Veranstaltungen, die Einblicke in rechtliche Anforderungen, Compliance-Themen und regulatorische Rahmenbedingungen für Startups bieten',
                    'es' => 'Eventos que brindan información sobre requisitos legales, problemas de cumplimiento y marcos regulatorios para startups',
                    'pl' => 'Wydarzenia, które dostarczają informacji na temat wymagań prawnych, problemów z zgodnością i ram regulacyjnych dla startupów'
                ])
            ],
            [
                'id' => 14,
                'parent_id' => 0,
                'slug' => 'regional-location-based-events',
                'name' => 'Regional & Location-Based Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Regional & Location-Based Events',
                    'de' => 'Regionale und standortbasierte Veranstaltungen',
                    'es' => 'Eventos Regionales y Basados en Ubicación',
                    'pl' => 'Wydarzenia Regionalne i Lokalizacyjne'
                ]),
                'scom' => 'Events that focus on specific geographic regions or local communities, fostering regional connections and collaborations',
                'scom_translations' => json_encode([
                    'en' => 'Events that focus on specific geographic regions or local communities, fostering regional connections and collaborations',
                    'de' => 'Veranstaltungen, die sich auf bestimmte geografische Regionen oder lokale Gemeinschaften konzentrieren und regionale Verbindungen und Kooperationen fördern',
                    'es' => 'Eventos que se centran en regiones geográficas específicas o comunidades locales, fomentando conexiones y colaboraciones regionales',
                    'pl' => 'Wydarzenia skoncentrowane na konkretnych regionach geograficznych lub lokalnych społecznościach, wspierające regionalne połączenia i współpracę'
                ])
            ],
            [
                'id' => 15,
                'parent_id' => 0,
                'slug' => 'awards-recognition-events',
                'name' => 'Awards & Recognition Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Awards & Recognition Events',
                    'de' => 'Auszeichnungs- und Anerkennungsveranstaltungen',
                    'es' => 'Eventos de Premios y Reconocimiento',
                    'pl' => 'Wydarzenia Nagród i Uznania'
                ]),
                'scom' => 'Events that celebrate achievements, innovations, and contributions within the startup community',
                'scom_translations' => json_encode([
                    'en' => 'Events that celebrate achievements, innovations, and contributions within the startup community',
                    'de' => 'Veranstaltungen, die Erfolge, Innovationen und Beiträge innerhalb der Startup-Community feiern',
                    'es' => 'Eventos que celebran logros, innovaciones y contribuciones dentro de la comunidad de startups',
                    'pl' => 'Wydarzenia, które celebrują osiągnięcia, innowacje i wkład w społeczność startupów'
                ])
            ],
            [
                'id' => 16,
                'parent_id' => 0,
                'slug' => 'special-interest-events',
                'name' => 'Special Interest Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Special Interest Events',
                    'de' => 'Veranstaltungen für spezielle Interessen',
                    'es' => 'Eventos de Interés Especial',
                    'pl' => 'Wydarzenia Specjalne'
                ]),
                'scom' => 'Events that cater to specific interests or hobbies within the startup community, fostering niche networking and collaboration',
                'scom_translations' => json_encode([
                    'en' => 'Events that cater to specific interests or hobbies within the startup community, fostering niche networking and collaboration',
                    'de' => 'Veranstaltungen, die auf spezielle Interessen oder Hobbys innerhalb der Startup-Community ausgerichtet sind und Nischen-Netzwerken und Zusammenarbeit fördern',
                    'es' => 'Eventos que atienden intereses o pasatiempos específicos dentro de la comunidad de startups, fomentando el networking y la colaboración de nicho',
                    'pl' => 'Wydarzenia skierowane do konkretnych zainteresowań lub hobby w społeczności startupów, wspierające niszowy networking i współpracę'
                ])
            ],
            [
                'id' => 17,
                'parent_id' => 0,
                'slug' => 'virtual-hybrid-events',
                'name' => 'Virtual & Hybrid Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Virtual & Hybrid Events',
                    'de' => 'Virtuelle und hybride Veranstaltungen',
                    'es' => 'Eventos Virtuales e Híbridos',
                    'pl' => 'Wydarzenia Wirtualne i Hybrydowe'
                ]),
                'scom' => 'Events that combine in-person and online participation, allowing broader access and engagement',
                'scom_translations' => json_encode([
                    'en' => 'Events that combine in-person and online participation, allowing broader access and engagement',
                    'de' => 'Veranstaltungen, die persönliche und Online-Teilnahme kombinieren, um breiteren Zugang und Engagement zu ermöglichen',
                    'es' => 'Eventos que combinan la participación presencial y en línea, permitiendo un acceso y compromiso más amplio',
                    'pl' => 'Wydarzenia, które łączą uczestnictwo osobiste i online, umożliwiając szerszy dostęp i zaangażowanie'
                ])
            ],
            [
                'id' => 18,
                'parent_id' => 0,
                'slug' => 'other',
                'name' => 'Other',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other',
                    'de' => 'Andere',
                    'es' => 'Otro',
                    'pl' => 'Inne'
                ]),
                'scom' => 'Other events that do not fit into the above categories, providing flexibility for unique or specialized gatherings',
                'scom_translations' => json_encode([
                    'en' => 'Other events that do not fit into the above categories, providing flexibility for unique or specialized gatherings',
                    'de' => 'Andere Veranstaltungen, die nicht in die oben genannten Kategorien passen und Flexibilität für einzigartige oder spezialisierte Zusammenkünfte bieten',
                    'es' => 'Otros eventos que no encajan en las categorías anteriores, proporcionando flexibilidad para reuniones únicas o especializadas',
                    'pl' => 'Inne wydarzenia, które nie pasują do powyższych kategorii, zapewniające elastyczność dla unikalnych lub specjalistycznych spotkań'
                ])
            ],
            [
                'id' => 19,
                'parent_id' => 1,
                'slug' => 'startup-meetups',
                'name' => 'Startup Meetups',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Startup Meetups',
                    'de' => 'Startup-Meetups',
                    'es' => 'Encuentros de Startups',
                    'pl' => 'Spotkania Startupów'
                ]),
                'scom' => 'Regular meetups for startup founders and entrepreneurs to connect and share experiences',
                'scom_translations' => json_encode([
                    'en' => 'Regular meetups for startup founders and entrepreneurs to connect and share experiences',
                    'de' => 'Regelmäßige Meetups für Startup-Gründer und Unternehmer zum Vernetzen und Erfahrungsaustausch',
                    'es' => 'Encuentros regulares para fundadores de startups y emprendedores para conectar y compartir experiencias',
                    'pl' => 'Regularne spotkania dla założycieli startupów i przedsiębiorców w celu nawiązywania kontaktów i dzielenia się doświadczeniami'
                ])
            ],
            [
                'id' => 20,
                'parent_id' => 1,
                'slug' => 'entrepreneur-networking',
                'name' => 'Entrepreneur Networking',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Entrepreneur Networking',
                    'de' => 'Unternehmer-Networking',
                    'es' => 'Networking de Emprendedores',
                    'pl' => 'Networking Przedsiębiorców'
                ]),
                'scom' => 'Professional networking events specifically for entrepreneurs and business owners',
                'scom_translations' => json_encode([
                    'en' => 'Professional networking events specifically for entrepreneurs and business owners',
                    'de' => 'Professionelle Networking-Veranstaltungen speziell für Unternehmer und Geschäftsinhaber',
                    'es' => 'Eventos de networking profesional específicamente para emprendedores y propietarios de negocios',
                    'pl' => 'Profesjonalne wydarzenia networkingowe specjalnie dla przedsiębiorców i właścicieli firm'
                ])
            ],
            [
                'id' => 21,
                'parent_id' => 1,
                'slug' => 'industry-mixers',
                'name' => 'Industry Mixers',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Industry Mixers',
                    'de' => 'Branchen-Mixer',
                    'es' => 'Mixers de la Industria',
                    'pl' => 'Mikery Branżowe'
                ]),
                'scom' => 'Informal networking events that bring together professionals from various industries',
                'scom_translations' => json_encode([
                    'en' => 'Informal networking events that bring together professionals from various industries',
                    'de' => 'Informelle Networking-Veranstaltungen, die Fachleute aus verschiedenen Branchen zusammenbringen',
                    'es' => 'Eventos de networking informales que reúnen profesionales de varias industrias',
                    'pl' => 'Nieformalne wydarzenia networkingowe łączące profesjonalistów z różnych branż'
                ])
            ],
            [
                'id' => 22,
                'parent_id' => 1,
                'slug' => 'coffee-chats-casual-meetups',
                'name' => 'Coffee Chats & Casual Meetups',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Coffee Chats & Casual Meetups',
                    'de' => 'Kaffee-Gespräche & Lockere Meetups',
                    'es' => 'Charlas de Café y Encuentros Casuales',
                    'pl' => 'Rozmowy przy Kawie i Nieformalne Spotkania'
                ]),
                'scom' => 'Relaxed, informal meetups in casual settings like coffee shops for networking',
                'scom_translations' => json_encode([
                    'en' => 'Relaxed, informal meetups in casual settings like coffee shops for networking',
                    'de' => 'Entspannte, informelle Meetups in ungezwungenen Umgebungen wie Cafés zum Networking',
                    'es' => 'Encuentros relajados e informales en entornos casuales como cafeterías para networking',
                    'pl' => 'Spokojne, nieformalne spotkania w swobodnych miejscach jak kawiarnie do networkingu'
                ])
            ],
            [
                'id' => 23,
                'parent_id' => 1,
                'slug' => 'speed-networking',
                'name' => 'Speed Networking',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Speed Networking',
                    'de' => 'Speed-Networking',
                    'es' => 'Networking Rápido',
                    'pl' => 'Speed Networking'
                ]),
                'scom' => 'Fast-paced networking events where participants have brief conversations with multiple people',
                'scom_translations' => json_encode([
                    'en' => 'Fast-paced networking events where participants have brief conversations with multiple people',
                    'de' => 'Schnelllebige Networking-Veranstaltungen, bei denen Teilnehmer kurze Gespräche mit mehreren Personen führen',
                    'es' => 'Eventos de networking de ritmo rápido donde los participantes tienen conversaciones breves con múltiples personas',
                    'pl' => 'Szybkie wydarzenia networkingowe, gdzie uczestnicy prowadzą krótkie rozmowy z wieloma osobami'
                ])
            ],
            [
                'id' => 24,
                'parent_id' => 1,
                'slug' => 'professional-association-events',
                'name' => 'Professional Association Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Professional Association Events',
                    'de' => 'Berufsverbands-Veranstaltungen',
                    'es' => 'Eventos de Asociaciones Profesionales',
                    'pl' => 'Wydarzenia Stowarzyszeń Zawodowych'
                ]),
                'scom' => 'Networking events organized by professional associations and industry groups',
                'scom_translations' => json_encode([
                    'en' => 'Networking events organized by professional associations and industry groups',
                    'de' => 'Networking-Veranstaltungen, die von Berufsverbänden und Branchengruppen organisiert werden',
                    'es' => 'Eventos de networking organizados por asociaciones profesionales y grupos de la industria',
                    'pl' => 'Wydarzenia networkingowe organizowane przez stowarzyszenia zawodowe i grupy branżowe'
                ])
            ],
            [
                'id' => 25,
                'parent_id' => 1,
                'slug' => 'alumni-networks',
                'name' => 'Alumni Networks',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Alumni Networks',
                    'de' => 'Alumni-Netzwerke',
                    'es' => 'Redes de Exalumnos',
                    'pl' => 'Sieci Absolwentów'
                ]),
                'scom' => 'Networking events for alumni from universities, accelerators, or companies',
                'scom_translations' => json_encode([
                    'en' => 'Networking events for alumni from universities, accelerators, or companies',
                    'de' => 'Networking-Veranstaltungen für Alumni von Universitäten, Acceleratoren oder Unternehmen',
                    'es' => 'Eventos de networking para exalumnos de universidades, aceleradoras o empresas',
                    'pl' => 'Wydarzenia networkingowe dla absolwentów uniwersytetów, akceleratorów lub firm'
                ])
            ],
            [
                'id' => 26,
                'parent_id' => 1,
                'slug' => 'co-founder-matching-events',
                'name' => 'Co-founder Matching Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Co-founder Matching Events',
                    'de' => 'Co-Founder-Matching-Events',
                    'es' => 'Eventos de Matching de Co-fundadores',
                    'pl' => 'Wydarzenia Dopasowywania Współzałożycieli'
                ]),
                'scom' => 'Events designed to help entrepreneurs find potential co-founders for their startups',
                'scom_translations' => json_encode([
                    'en' => 'Events designed to help entrepreneurs find potential co-founders for their startups',
                    'de' => 'Veranstaltungen, die Unternehmern helfen, potenzielle Mitgründer für ihre Startups zu finden',
                    'es' => 'Eventos diseñados para ayudar a los emprendedores a encontrar potenciales co-fundadores para sus startups',
                    'pl' => 'Wydarzenia zaprojektowane, aby pomóc przedsiębiorcom znaleźć potencjalnych współzałożycieli dla swoich startupów'
                ])
            ],
            [
                'id' => 27,
                'parent_id' => 1,
                'slug' => 'investor-founder-meetups',
                'name' => 'Investor-Founder Meetups',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Investor-Founder Meetups',
                    'de' => 'Investor-Gründer-Meetups',
                    'es' => 'Encuentros Inversor-Fundador',
                    'pl' => 'Spotkania Inwestor-Założyciel'
                ]),
                'scom' => 'Informal meetups that bring together investors and startup founders',
                'scom_translations' => json_encode([
                    'en' => 'Informal meetups that bring together investors and startup founders',
                    'de' => 'Informelle Meetups, die Investoren und Startup-Gründer zusammenbringen',
                    'es' => 'Encuentros informales que reúnen inversores y fundadores de startups',
                    'pl' => 'Nieformalne spotkania łączące inwestorów i założycieli startupów'
                ])
            ],
            [
                'id' => 28,
                'parent_id' => 1,
                'slug' => 'women-in-tech-business-events',
                'name' => 'Women in Tech/Business Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Women in Tech/Business Events',
                    'de' => 'Frauen in Tech/Business-Events',
                    'es' => 'Eventos de Mujeres en Tech/Negocios',
                    'pl' => 'Wydarzenia Kobiet w Tech/Biznesie'
                ]),
                'scom' => 'Networking events specifically for women in technology and business sectors',
                'scom_translations' => json_encode([
                    'en' => 'Networking events specifically for women in technology and business sectors',
                    'de' => 'Networking-Veranstaltungen speziell für Frauen in der Technologie- und Wirtschaftsbranche',
                    'es' => 'Eventos de networking específicamente para mujeres en los sectores de tecnología y negocios',
                    'pl' => 'Wydarzenia networkingowe specjalnie dla kobiet w sektorach technologii i biznesu'
                ])
            ],
            [
                'id' => 29,
                'parent_id' => 1,
                'slug' => 'other-networking',
                'name' => 'Other Networking Events',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Networking Events',
                    'de' => 'Andere Networking-Veranstaltungen',
                    'es' => 'Otros Eventos de Networking',
                    'pl' => 'Inne Wydarzenia Networkingowe'
                ]),
                'scom' => 'Other networking events that do not fit into the above subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Other networking events that do not fit into the above subcategories',
                    'de' => 'Andere Networking-Veranstaltungen, die nicht in die oben genannten Unterkategorien passen',
                    'es' => 'Otros eventos de networking que no encajan en las subcategorías anteriores',
                    'pl' => 'Inne wydarzenia networkingowe, które nie pasują do powyższych podkategorii'
                ])
            ],
            [
                'id' => 30,
                'parent_id' => 2,
                'slug' => 'pitch-competitions',
                'name' => 'Pitch Competitions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Pitch Competitions',
                    'de' => 'Pitch-Wettbewerbe',
                    'es' => 'Competencias de Pitch',
                    'pl' => 'Konkursy Pitch'
                ]),
                'scom' => 'Competitive events where startups present their business ideas to win prizes or funding',
                'scom_translations' => json_encode([
                    'en' => 'Competitive events where startups present their business ideas to win prizes or funding',
                    'de' => 'Wettbewerbsveranstaltungen, bei denen Startups ihre Geschäftsideen präsentieren, um Preise oder Finanzierung zu gewinnen',
                    'es' => 'Eventos competitivos donde las startups presentan sus ideas de negocio para ganar premios o financiación',
                    'pl' => 'Wydarzenia konkurencyjne, w których startupy prezentują swoje pomysły biznesowe, aby wygrać nagrody lub finansowanie'
                ])
            ],
            [
                'id' => 31,
                'parent_id' => 2,
                'slug' => 'demo-days',
                'name' => 'Demo Days',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Demo Days',
                    'de' => 'Demo-Tage',
                    'es' => 'Días de Demostración',
                    'pl' => 'Dni Demo'
                ]),
                'scom' => 'Events where startups demonstrate their products and services to potential investors and customers',
                'scom_translations' => json_encode([
                    'en' => 'Events where startups demonstrate their products and services to potential investors and customers',
                    'de' => 'Veranstaltungen, bei denen Startups ihre Produkte und Dienstleistungen potenziellen Investoren und Kunden vorführen',
                    'es' => 'Eventos donde las startups demuestran sus productos y servicios a potenciales inversores y clientes',
                    'pl' => 'Wydarzenia, podczas których startupy prezentują swoje produkty i usługi potencjalnym inwestorom i klientom'
                ])
            ],
            [
                'id' => 32,
                'parent_id' => 2,
                'slug' => 'startup-battles',
                'name' => 'Startup Battles',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Startup Battles',
                    'de' => 'Startup-Battles',
                    'es' => 'Batallas de Startups',
                    'pl' => 'Bitwy Startupów'
                ]),
                'scom' => 'Head-to-head competitions between startups to determine the best business concept',
                'scom_translations' => json_encode([
                    'en' => 'Head-to-head competitions between startups to determine the best business concept',
                    'de' => 'Direkter Wettbewerb zwischen Startups zur Ermittlung des besten Geschäftskonzepts',
                    'es' => 'Competencias cara a cara entre startups para determinar el mejor concepto de negocio',
                    'pl' => 'Bezpośrednie konkursy między startupami w celu wyłonienia najlepszej koncepcji biznesowej'
                ])
            ],
            [
                'id' => 33,
                'parent_id' => 2,
                'slug' => 'elevator-pitch-events',
                'name' => 'Elevator Pitch Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Elevator Pitch Events',
                    'de' => 'Elevator-Pitch-Events',
                    'es' => 'Eventos de Elevator Pitch',
                    'pl' => 'Wydarzenia Elevator Pitch'
                ]),
                'scom' => 'Events focused on delivering concise, compelling business pitches in a limited time',
                'scom_translations' => json_encode([
                    'en' => 'Events focused on delivering concise, compelling business pitches in a limited time',
                    'de' => 'Veranstaltungen, die sich auf die Präsentation prägnanter, überzeugender Geschäftspräsentationen in begrenzter Zeit konzentrieren',
                    'es' => 'Eventos enfocados en entregar pitches de negocio concisos y convincentes en tiempo limitado',
                    'pl' => 'Wydarzenia skoncentrowane na prezentowaniu zwięzłych, przekonujących prezentacji biznesowych w ograniczonym czasie'
                ])
            ],
            [
                'id' => 34,
                'parent_id' => 2,
                'slug' => 'investor-pitch-sessions',
                'name' => 'Investor Pitch Sessions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Investor Pitch Sessions',
                    'de' => 'Investor-Pitch-Sessions',
                    'es' => 'Sesiones de Pitch a Inversores',
                    'pl' => 'Sesje Pitch dla Inwestorów'
                ]),
                'scom' => 'Structured sessions where startups pitch directly to investors for funding opportunities',
                'scom_translations' => json_encode([
                    'en' => 'Structured sessions where startups pitch directly to investors for funding opportunities',
                    'de' => 'Strukturierte Sessions, in denen Startups direkt Investoren für Finanzierungsmöglichkeiten pitchen',
                    'es' => 'Sesiones estructuradas donde las startups hacen pitch directamente a inversores para oportunidades de financiación',
                    'pl' => 'Strukturalne sesje, podczas których startupy prezentują się bezpośrednio inwestorom w poszukiwaniu możliwości finansowania'
                ])
            ],
            [
                'id' => 35,
                'parent_id' => 2,
                'slug' => 'product-launch-events',
                'name' => 'Product Launch Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Product Launch Events',
                    'de' => 'Produkteinführungsveranstaltungen',
                    'es' => 'Eventos de Lanzamiento de Productos',
                    'pl' => 'Wydarzenia Wprowadzenia Produktów'
                ]),
                'scom' => 'Events dedicated to showcasing and launching new products or services',
                'scom_translations' => json_encode([
                    'en' => 'Events dedicated to showcasing and launching new products or services',
                    'de' => 'Veranstaltungen zur Präsentation und Einführung neuer Produkte oder Dienstleistungen',
                    'es' => 'Eventos dedicados a mostrar y lanzar nuevos productos o servicios',
                    'pl' => 'Wydarzenia poświęcone prezentowaniu i wprowadzaniu nowych produktów lub usług'
                ])
            ],
            [
                'id' => 36,
                'parent_id' => 2,
                'slug' => 'hackathon-presentations',
                'name' => 'Hackathon Presentations',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Hackathon Presentations',
                    'de' => 'Hackathon-Präsentationen',
                    'es' => 'Presentaciones de Hackathon',
                    'pl' => 'Prezentacje Hackathonu'
                ]),
                'scom' => 'Presentation events showcasing projects developed during hackathons',
                'scom_translations' => json_encode([
                    'en' => 'Presentation events showcasing projects developed during hackathons',
                    'de' => 'Präsentationsveranstaltungen, die während Hackathons entwickelte Projekte zeigen',
                    'es' => 'Eventos de presentación que muestran proyectos desarrollados durante hackathons',
                    'pl' => 'Wydarzenia prezentacyjne pokazujące projekty opracowane podczas hackathonów'
                ])
            ],
            [
                'id' => 37,
                'parent_id' => 2,
                'slug' => 'business-plan-competitions',
                'name' => 'Business Plan Competitions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Business Plan Competitions',
                    'de' => 'Businessplan-Wettbewerbe',
                    'es' => 'Competencias de Planes de Negocio',
                    'pl' => 'Konkursy Planów Biznesowych'
                ]),
                'scom' => 'Competitive events evaluating comprehensive business plans and strategies',
                'scom_translations' => json_encode([
                    'en' => 'Competitive events evaluating comprehensive business plans and strategies',
                    'de' => 'Wettbewerbsveranstaltungen zur Bewertung umfassender Geschäftspläne und -strategien',
                    'es' => 'Eventos competitivos que evalúan planes de negocio y estrategias integrales',
                    'pl' => 'Wydarzenia konkurencyjne oceniające kompleksowe plany biznesowe i strategie'
                ])
            ],
            [
                'id' => 38,
                'parent_id' => 2,
                'slug' => 'innovation-challenges',
                'name' => 'Innovation Challenges',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Innovation Challenges',
                    'de' => 'Innovations-Herausforderungen',
                    'es' => 'Desafíos de Innovación',
                    'pl' => 'Wyzwania Innowacyjne'
                ]),
                'scom' => 'Challenge-based events encouraging innovative solutions to specific problems',
                'scom_translations' => json_encode([
                    'en' => 'Challenge-based events encouraging innovative solutions to specific problems',
                    'de' => 'Challenge-basierte Veranstaltungen, die innovative Lösungen für spezifische Probleme fördern',
                    'es' => 'Eventos basados en desafíos que fomentan soluciones innovadoras a problemas específicos',
                    'pl' => 'Wydarzenia oparte na wyzwaniach zachęcających do innowacyjnych rozwiązań konkretnych problemów'
                ])
            ],
            [
                'id' => 39,
                'parent_id' => 2,
                'slug' => 'startup-showcases',
                'name' => 'Startup Showcases',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Startup Showcases',
                    'de' => 'Startup-Showcases',
                    'es' => 'Escaparates de Startups',
                    'pl' => 'Pokazy Startupów'
                ]),
                'scom' => 'Events where startups display their achievements, products, and company culture',
                'scom_translations' => json_encode([
                    'en' => 'Events where startups display their achievements, products, and company culture',
                    'de' => 'Veranstaltungen, bei denen Startups ihre Erfolge, Produkte und Unternehmenskultur präsentieren',
                    'es' => 'Eventos donde las startups muestran sus logros, productos y cultura empresarial',
                    'pl' => 'Wydarzenia, podczas których startupy prezentują swoje osiągnięcia, produkty i kulturę firmy'
                ])
            ],
            [
                'id' => 40,
                'parent_id' => 2,
                'slug' => 'other-pitch-competition',
                'name' => 'Other Pitch & Competition Events',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Pitch & Competition Events',
                    'de' => 'Andere Pitch- und Wettbewerbsveranstaltungen',
                    'es' => 'Otros Eventos de Pitch y Competencia',
                    'pl' => 'Inne Wydarzenia Pitch i Konkursowe'
                ]),
                'scom' => 'Other pitch and competition events that do not fit into the above subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Other pitch and competition events that do not fit into the above subcategories',
                    'de' => 'Andere Pitch- und Wettbewerbsveranstaltungen, die nicht in die oben genannten Unterkategorien passen',
                    'es' => 'Otros eventos de pitch y competencia que no encajan en las subcategorías anteriores',
                    'pl' => 'Inne wydarzenia pitch i konkursowe, które nie pasują do powyższych podkategorii'
                ])
            ],
            [
                'id' => 41,
                'parent_id' => 3,
                'slug' => 'workshops-masterclasses',
                'name' => 'Workshops & Masterclasses',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Workshops & Masterclasses',
                    'de' => 'Workshops & Masterclasses',
                    'es' => 'Talleres y Clases Magistrales',
                    'pl' => 'Warsztaty i Masterclassy'
                ]),
                'scom' => 'Hands-on learning sessions and expert-led masterclasses on various business topics',
                'scom_translations' => json_encode([
                    'en' => 'Hands-on learning sessions and expert-led masterclasses on various business topics',
                    'de' => 'Praktische Lernsessions und expertengeführte Masterclasses zu verschiedenen Geschäftsthemen',
                    'es' => 'Sesiones de aprendizaje práctico y clases magistrales dirigidas por expertos sobre varios temas de negocios',
                    'pl' => 'Praktyczne sesje edukacyjne i masterclassy prowadzone przez ekspertów na różne tematy biznesowe'
                ])
            ],
            [
                'id' => 42,
                'parent_id' => 3,
                'slug' => 'seminars-webinars',
                'name' => 'Seminars & Webinars',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Seminars & Webinars',
                    'de' => 'Seminare & Webinare',
                    'es' => 'Seminarios y Webinarios',
                    'pl' => 'Seminaria i Webinaria'
                ]),
                'scom' => 'Educational seminars and online webinars covering startup and business knowledge',
                'scom_translations' => json_encode([
                    'en' => 'Educational seminars and online webinars covering startup and business knowledge',
                    'de' => 'Bildungsseminare und Online-Webinare zu Startup- und Geschäftswissen',
                    'es' => 'Seminarios educativos y webinarios en línea que cubren conocimientos de startups y negocios',
                    'pl' => 'Seminaria edukacyjne i webinaria online obejmujące wiedzę o startupach i biznesie'
                ])
            ],
            [
                'id' => 43,
                'parent_id' => 3,
                'slug' => 'startup-bootcamps',
                'name' => 'Startup Bootcamps',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Startup Bootcamps',
                    'de' => 'Startup-Bootcamps',
                    'es' => 'Bootcamps de Startups',
                    'pl' => 'Bootcampy Startupowe'
                ]),
                'scom' => 'Intensive training programs designed to accelerate startup knowledge and skills',
                'scom_translations' => json_encode([
                    'en' => 'Intensive training programs designed to accelerate startup knowledge and skills',
                    'de' => 'Intensive Trainingsprogramme zur Beschleunigung von Startup-Wissen und -Fähigkeiten',
                    'es' => 'Programas de entrenamiento intensivo diseñados para acelerar el conocimiento y habilidades de startups',
                    'pl' => 'Intensywne programy szkoleniowe zaprojektowane w celu przyspieszenia wiedzy i umiejętności startupowych'
                ])
            ],
            [
                'id' => 44,
                'parent_id' => 3,
                'slug' => 'skills-training-sessions',
                'name' => 'Skills Training Sessions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Skills Training Sessions',
                    'de' => 'Fähigkeiten-Trainingssessions',
                    'es' => 'Sesiones de Entrenamiento de Habilidades',
                    'pl' => 'Sesje Szkolenia Umiejętności'
                ]),
                'scom' => 'Focused training sessions to develop specific professional and entrepreneurial skills',
                'scom_translations' => json_encode([
                    'en' => 'Focused training sessions to develop specific professional and entrepreneurial skills',
                    'de' => 'Fokussierte Trainingssessions zur Entwicklung spezifischer professioneller und unternehmerischer Fähigkeiten',
                    'es' => 'Sesiones de entrenamiento enfocadas para desarrollar habilidades profesionales y empresariales específicas',
                    'pl' => 'Skoncentrowane sesje treningowe rozwijające konkretne umiejętności zawodowe i przedsiębiorcze'
                ])
            ],
            [
                'id' => 45,
                'parent_id' => 3,
                'slug' => 'technical-workshops',
                'name' => 'Technical Workshops',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Technical Workshops',
                    'de' => 'Technische Workshops',
                    'es' => 'Talleres Técnicos',
                    'pl' => 'Warsztaty Techniczne'
                ]),
                'scom' => 'Workshops focused on technical skills, programming, and technology-related topics',
                'scom_translations' => json_encode([
                    'en' => 'Workshops focused on technical skills, programming, and technology-related topics',
                    'de' => 'Workshops mit Fokus auf technische Fähigkeiten, Programmierung und technologiebezogene Themen',
                    'es' => 'Talleres enfocados en habilidades técnicas, programación y temas relacionados con tecnología',
                    'pl' => 'Warsztaty skoncentrowane na umiejętnościach technicznych, programowaniu i tematach związanych z technologią'
                ])
            ],
            [
                'id' => 46,
                'parent_id' => 3,
                'slug' => 'business-strategy-sessions',
                'name' => 'Business Strategy Sessions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Business Strategy Sessions',
                    'de' => 'Geschäftsstrategie-Sessions',
                    'es' => 'Sesiones de Estrategia Empresarial',
                    'pl' => 'Sesje Strategii Biznesowej'
                ]),
                'scom' => 'Educational sessions focused on developing and implementing effective business strategies',
                'scom_translations' => json_encode([
                    'en' => 'Educational sessions focused on developing and implementing effective business strategies',
                    'de' => 'Bildungssessions mit Fokus auf die Entwicklung und Umsetzung effektiver Geschäftsstrategien',
                    'es' => 'Sesiones educativas enfocadas en desarrollar e implementar estrategias empresariales efectivas',
                    'pl' => 'Sesje edukacyjne skoncentrowane na rozwijaniu i wdrażaniu skutecznych strategii biznesowych'
                ])
            ],
            [
                'id' => 47,
                'parent_id' => 3,
                'slug' => 'marketing-workshops',
                'name' => 'Marketing Workshops',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Marketing Workshops',
                    'de' => 'Marketing-Workshops',
                    'es' => 'Talleres de Marketing',
                    'pl' => 'Warsztaty Marketingowe'
                ]),
                'scom' => 'Workshops covering various aspects of marketing, from digital marketing to brand building',
                'scom_translations' => json_encode([
                    'en' => 'Workshops covering various aspects of marketing, from digital marketing to brand building',
                    'de' => 'Workshops zu verschiedenen Marketing-Aspekten, vom digitalen Marketing bis zum Markenaufbau',
                    'es' => 'Talleres que cubren varios aspectos del marketing, desde marketing digital hasta construcción de marca',
                    'pl' => 'Warsztaty obejmujące różne aspekty marketingu, od marketingu cyfrowego po budowanie marki'
                ])
            ],
            [
                'id' => 48,
                'parent_id' => 3,
                'slug' => 'legal-compliance-sessions',
                'name' => 'Legal & Compliance Sessions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Legal & Compliance Sessions',
                    'de' => 'Rechts- und Compliance-Sessions',
                    'es' => 'Sesiones Legales y de Cumplimiento',
                    'pl' => 'Sesje Prawne i Zgodności'
                ]),
                'scom' => 'Educational sessions on legal requirements, compliance issues, and regulatory frameworks',
                'scom_translations' => json_encode([
                    'en' => 'Educational sessions on legal requirements, compliance issues, and regulatory frameworks',
                    'de' => 'Bildungssessions zu rechtlichen Anforderungen, Compliance-Themen und regulatorischen Rahmenbedingungen',
                    'es' => 'Sesiones educativas sobre requisitos legales, problemas de cumplimiento y marcos regulatorios',
                    'pl' => 'Sesje edukacyjne na temat wymagań prawnych, problemów zgodności i ram regulacyjnych'
                ])
            ],
            [
                'id' => 49,
                'parent_id' => 3,
                'slug' => 'financial-planning-workshops',
                'name' => 'Financial Planning Workshops',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Financial Planning Workshops',
                    'de' => 'Finanzplanungs-Workshops',
                    'es' => 'Talleres de Planificación Financiera',
                    'pl' => 'Warsztaty Planowania Finansowego'
                ]),
                'scom' => 'Workshops focused on financial planning, budgeting, and financial management for startups',
                'scom_translations' => json_encode([
                    'en' => 'Workshops focused on financial planning, budgeting, and financial management for startups',
                    'de' => 'Workshops mit Fokus auf Finanzplanung, Budgetierung und Finanzmanagement für Startups',
                    'es' => 'Talleres enfocados en planificación financiera, presupuesto y gestión financiera para startups',
                    'pl' => 'Warsztaty skoncentrowane na planowaniu finansowym, budżetowaniu i zarządzaniu finansami dla startupów'
                ])
            ],
            [
                'id' => 50,
                'parent_id' => 3,
                'slug' => 'leadership-development-programs',
                'name' => 'Leadership Development Programs',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Leadership Development Programs',
                    'de' => 'Führungskräfte-Entwicklungsprogramme',
                    'es' => 'Programas de Desarrollo de Liderazgo',
                    'pl' => 'Programy Rozwoju Przywództwa'
                ]),
                'scom' => 'Programs designed to develop leadership skills and capabilities for entrepreneurs and executives',
                'scom_translations' => json_encode([
                    'en' => 'Programs designed to develop leadership skills and capabilities for entrepreneurs and executives',
                    'de' => 'Programme zur Entwicklung von Führungsfähigkeiten und -kompetenzen für Unternehmer und Führungskräfte',
                    'es' => 'Programas diseñados para desarrollar habilidades y capacidades de liderazgo para emprendedores y ejecutivos',
                    'pl' => 'Programy zaprojektowane w celu rozwoju umiejętności i zdolności przywódczych dla przedsiębiorców i kadry kierowniczej'
                ])
            ],
            [
                'id' => 51,
                'parent_id' => 3,
                'slug' => 'other-educational-learning',
                'name' => 'Other Educational & Learning Events',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Educational & Learning Events',
                    'de' => 'Andere Bildungs- und Lernveranstaltungen',
                    'es' => 'Otros Eventos Educativos y de Aprendizaje',
                    'pl' => 'Inne Wydarzenia Edukacyjne i Szkoleniowe'
                ]),
                'scom' => 'Other educational and learning events that do not fit into the above subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Other educational and learning events that do not fit into the above subcategories',
                    'de' => 'Andere Bildungs- und Lernveranstaltungen, die nicht in die oben genannten Unterkategorien passen',
                    'es' => 'Otros eventos educativos y de aprendizaje que no encajan en las subcategorías anteriores',
                    'pl' => 'Inne wydarzenia edukacyjne i szkoleniowe, które nie pasują do powyższych podkategorii'
                ])
            ],
            [
                'id' => 52,
                'parent_id' => 4,
                'slug' => 'startup-conferences',
                'name' => 'Startup Conferences',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Startup Conferences',
                    'de' => 'Startup-Konferenzen',
                    'es' => 'Conferencias de Startups',
                    'pl' => 'Konferencje Startupowe'
                ]),
                'scom' => 'Large-scale conferences specifically focused on startup ecosystem, trends, and innovations',
                'scom_translations' => json_encode([
                    'en' => 'Large-scale conferences specifically focused on startup ecosystem, trends, and innovations',
                    'de' => 'Großveranstaltungen, die sich speziell auf das Startup-Ökosystem, Trends und Innovationen konzentrieren',
                    'es' => 'Conferencias a gran escala específicamente enfocadas en el ecosistema de startups, tendencias e innovaciones',
                    'pl' => 'Konferencje na dużą skalę skoncentrowane na ekosystemie startupów, trendach i innowacjach'
                ])
            ],
            [
                'id' => 53,
                'parent_id' => 4,
                'slug' => 'tech-conferences',
                'name' => 'Tech Conferences',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Tech Conferences',
                    'de' => 'Tech-Konferenzen',
                    'es' => 'Conferencias Tecnológicas',
                    'pl' => 'Konferencje Technologiczne'
                ]),
                'scom' => 'Conferences focused on technology trends, innovations, and technical developments',
                'scom_translations' => json_encode([
                    'en' => 'Conferences focused on technology trends, innovations, and technical developments',
                    'de' => 'Konferenzen mit Fokus auf Technologie-Trends, Innovationen und technische Entwicklungen',
                    'es' => 'Conferencias enfocadas en tendencias tecnológicas, innovaciones y desarrollos técnicos',
                    'pl' => 'Konferencje skoncentrowane na trendach technologicznych, innowacjach i rozwoju technicznym'
                ])
            ],
            [
                'id' => 54,
                'parent_id' => 4,
                'slug' => 'industry-summits',
                'name' => 'Industry Summits',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Industry Summits',
                    'de' => 'Branchen-Gipfeltreffen',
                    'es' => 'Cumbres de la Industria',
                    'pl' => 'Szczyty Branżowe'
                ]),
                'scom' => 'High-level summits bringing together industry leaders and decision-makers',
                'scom_translations' => json_encode([
                    'en' => 'High-level summits bringing together industry leaders and decision-makers',
                    'de' => 'Hochrangige Gipfeltreffen, die Branchenführer und Entscheidungsträger zusammenbringen',
                    'es' => 'Cumbres de alto nivel que reúnen líderes de la industria y tomadores de decisiones',
                    'pl' => 'Szczyty wysokiego szczebla łączące liderów branży i decydentów'
                ])
            ],
            [
                'id' => 55,
                'parent_id' => 4,
                'slug' => 'innovation-conferences',
                'name' => 'Innovation Conferences',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Innovation Conferences',
                    'de' => 'Innovations-Konferenzen',
                    'es' => 'Conferencias de Innovación',
                    'pl' => 'Konferencje Innowacyjne'
                ]),
                'scom' => 'Conferences dedicated to showcasing and discussing breakthrough innovations and disruptive technologies',
                'scom_translations' => json_encode([
                    'en' => 'Conferences dedicated to showcasing and discussing breakthrough innovations and disruptive technologies',
                    'de' => 'Konferenzen zur Präsentation und Diskussion bahnbrechender Innovationen und disruptiver Technologien',
                    'es' => 'Conferencias dedicadas a mostrar y discutir innovaciones revolucionarias y tecnologías disruptivas',
                    'pl' => 'Konferencje poświęcone prezentowaniu i omawianiu przełomowych innowacji i technologii disruptywnych'
                ])
            ],
            [
                'id' => 56,
                'parent_id' => 4,
                'slug' => 'entrepreneurship-summits',
                'name' => 'Entrepreneurship Summits',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Entrepreneurship Summits',
                    'de' => 'Unternehmertum-Gipfeltreffen',
                    'es' => 'Cumbres de Emprendimiento',
                    'pl' => 'Szczyty Przedsiębiorczości'
                ]),
                'scom' => 'Summits focused on entrepreneurship, business creation, and entrepreneurial success stories',
                'scom_translations' => json_encode([
                    'en' => 'Summits focused on entrepreneurship, business creation, and entrepreneurial success stories',
                    'de' => 'Gipfeltreffen mit Fokus auf Unternehmertum, Unternehmensgründung und unternehmerische Erfolgsgeschichten',
                    'es' => 'Cumbres enfocadas en emprendimiento, creación de negocios e historias de éxito empresarial',
                    'pl' => 'Szczyty skoncentrowane na przedsiębiorczości, tworzeniu biznesu i historiach sukcesu przedsiębiorczego'
                ])
            ],
            [
                'id' => 57,
                'parent_id' => 4,
                'slug' => 'regional-startup-events',
                'name' => 'Regional Startup Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Regional Startup Events',
                    'de' => 'Regionale Startup-Events',
                    'es' => 'Eventos Regionales de Startups',
                    'pl' => 'Regionalne Wydarzenia Startupowe'
                ]),
                'scom' => 'Conferences and summits focusing on specific geographic regions and local startup ecosystems',
                'scom_translations' => json_encode([
                    'en' => 'Conferences and summits focusing on specific geographic regions and local startup ecosystems',
                    'de' => 'Konferenzen und Gipfeltreffen mit Fokus auf bestimmte geografische Regionen und lokale Startup-Ökosysteme',
                    'es' => 'Conferencias y cumbres enfocadas en regiones geográficas específicas y ecosistemas locales de startups',
                    'pl' => 'Konferencje i szczyty skoncentrowane na konkretnych regionach geograficznych i lokalnych ekosystemach startupów'
                ])
            ],
            [
                'id' => 58,
                'parent_id' => 4,
                'slug' => 'international-conferences',
                'name' => 'International Conferences',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'International Conferences',
                    'de' => 'Internationale Konferenzen',
                    'es' => 'Conferencias Internacionales',
                    'pl' => 'Konferencje Międzynarodowe'
                ]),
                'scom' => 'Global conferences attracting international participants and speakers from around the world',
                'scom_translations' => json_encode([
                    'en' => 'Global conferences attracting international participants and speakers from around the world',
                    'de' => 'Globale Konferenzen, die internationale Teilnehmer und Sprecher aus aller Welt anziehen',
                    'es' => 'Conferencias globales que atraen participantes y oradores internacionales de todo el mundo',
                    'pl' => 'Globalne konferencje przyciągające międzynarodowych uczestników i mówców z całego świata'
                ])
            ],
            [
                'id' => 59,
                'parent_id' => 4,
                'slug' => 'trade-shows',
                'name' => 'Trade Shows',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Trade Shows',
                    'de' => 'Fachmessen',
                    'es' => 'Ferias Comerciales',
                    'pl' => 'Targi Handlowe'
                ]),
                'scom' => 'Industry-specific trade shows where companies showcase products and services to potential customers',
                'scom_translations' => json_encode([
                    'en' => 'Industry-specific trade shows where companies showcase products and services to potential customers',
                    'de' => 'Branchenspezifische Fachmessen, auf denen Unternehmen Produkte und Dienstleistungen potenziellen Kunden präsentieren',
                    'es' => 'Ferias comerciales específicas de la industria donde las empresas muestran productos y servicios a clientes potenciales',
                    'pl' => 'Branżowe targi, na których firmy prezentują produkty i usługi potencjalnym klientom'
                ])
            ],
            [
                'id' => 60,
                'parent_id' => 4,
                'slug' => 'expo-exhibition-events',
                'name' => 'Expo & Exhibition Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Expo & Exhibition Events',
                    'de' => 'Expo- und Ausstellungsveranstaltungen',
                    'es' => 'Eventos de Expo y Exhibición',
                    'pl' => 'Wydarzenia Expo i Wystawiennicze'
                ]),
                'scom' => 'Large-scale exhibitions and expos featuring multiple companies and innovative solutions',
                'scom_translations' => json_encode([
                    'en' => 'Large-scale exhibitions and expos featuring multiple companies and innovative solutions',
                    'de' => 'Großveranstaltungen und Expos mit mehreren Unternehmen und innovativen Lösungen',
                    'es' => 'Exhibiciones y expos a gran escala que presentan múltiples empresas y soluciones innovadoras',
                    'pl' => 'Wystawy i expo na dużą skalę prezentujące wiele firm i innowacyjnych rozwiązań'
                ])
            ],
            [
                'id' => 61,
                'parent_id' => 4,
                'slug' => 'annual-industry-conventions',
                'name' => 'Annual Industry Conventions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Annual Industry Conventions',
                    'de' => 'Jährliche Branchen-Konventionen',
                    'es' => 'Convenciones Anuales de la Industria',
                    'pl' => 'Coroczne Konwencje Branżowe'
                ]),
                'scom' => 'Annual gatherings that serve as the premier events for specific industries or sectors',
                'scom_translations' => json_encode([
                    'en' => 'Annual gatherings that serve as the premier events for specific industries or sectors',
                    'de' => 'Jährliche Zusammenkünfte, die als Hauptveranstaltungen für bestimmte Branchen oder Sektoren dienen',
                    'es' => 'Reuniones anuales que sirven como eventos principales para industrias o sectores específicos',
                    'pl' => 'Coroczne spotkania służące jako główne wydarzenia dla konkretnych branż lub sektorów'
                ])
            ],
            [
                'id' => 62,
                'parent_id' => 4,
                'slug' => 'other-conferences-summits',
                'name' => 'Other Conferences & Summits',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Conferences & Summits',
                    'de' => 'Andere Konferenzen und Gipfeltreffen',
                    'es' => 'Otras Conferencias y Cumbres',
                    'pl' => 'Inne Konferencje i Szczyty'
                ]),
                'scom' => 'Other conferences and summits that do not fit into the above subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Other conferences and summits that do not fit into the above subcategories',
                    'de' => 'Andere Konferenzen und Gipfeltreffen, die nicht in die oben genannten Unterkategorien passen',
                    'es' => 'Otras conferencias y cumbres que no encajan en las subcategorías anteriores',
                    'pl' => 'Inne konferencje i szczyty, które nie pasują do powyższych podkategorii'
                ])
            ],
            [
                'id' => 63,
                'parent_id' => 5,
                'slug' => 'investor-pitch-days',
                'name' => 'Investor Pitch Days',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Investor Pitch Days',
                    'de' => 'Investor-Pitch-Tage',
                    'es' => 'Días de Pitch a Inversores',
                    'pl' => 'Dni Pitch dla Inwestorów'
                ]),
                'scom' => 'Dedicated events where startups present their business ideas directly to investors',
                'scom_translations' => json_encode([
                    'en' => 'Dedicated events where startups present their business ideas directly to investors',
                    'de' => 'Spezielle Veranstaltungen, bei denen Startups ihre Geschäftsideen direkt Investoren präsentieren',
                    'es' => 'Eventos dedicados donde las startups presentan sus ideas de negocio directamente a inversores',
                    'pl' => 'Dedykowane wydarzenia, podczas których startupy prezentują swoje pomysły biznesowe bezpośrednio inwestorom'
                ])
            ],
            [
                'id' => 64,
                'parent_id' => 5,
                'slug' => 'venture-capital-events',
                'name' => 'Venture Capital Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Venture Capital Events',
                    'de' => 'Venture-Capital-Veranstaltungen',
                    'es' => 'Eventos de Capital de Riesgo',
                    'pl' => 'Wydarzenia Venture Capital'
                ]),
                'scom' => 'Events focused on venture capital funding, VC trends, and institutional investment opportunities',
                'scom_translations' => json_encode([
                    'en' => 'Events focused on venture capital funding, VC trends, and institutional investment opportunities',
                    'de' => 'Veranstaltungen mit Fokus auf Venture-Capital-Finanzierung, VC-Trends und institutionelle Investitionsmöglichkeiten',
                    'es' => 'Eventos enfocados en financiación de capital de riesgo, tendencias de VC y oportunidades de inversión institucional',
                    'pl' => 'Wydarzenia skoncentrowane na finansowaniu venture capital, trendach VC i możliwościach inwestycji instytucjonalnych'
                ])
            ],
            [
                'id' => 65,
                'parent_id' => 5,
                'slug' => 'angel-investor-meetups',
                'name' => 'Angel Investor Meetups',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Angel Investor Meetups',
                    'de' => 'Angel-Investor-Meetups',
                    'es' => 'Encuentros de Inversores Ángel',
                    'pl' => 'Spotkania Aniołów Biznesu'
                ]),
                'scom' => 'Meetups connecting startups with angel investors and private equity opportunities',
                'scom_translations' => json_encode([
                    'en' => 'Meetups connecting startups with angel investors and private equity opportunities',
                    'de' => 'Meetups, die Startups mit Angel-Investoren und Private-Equity-Möglichkeiten verbinden',
                    'es' => 'Encuentros que conectan startups con inversores ángel y oportunidades de capital privado',
                    'pl' => 'Spotkania łączące startupy z aniołami biznesu i możliwościami private equity'
                ])
            ],
            [
                'id' => 66,
                'parent_id' => 5,
                'slug' => 'funding-workshops',
                'name' => 'Funding Workshops',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Funding Workshops',
                    'de' => 'Finanzierungs-Workshops',
                    'es' => 'Talleres de Financiación',
                    'pl' => 'Warsztaty Finansowania'
                ]),
                'scom' => 'Educational workshops teaching startups how to secure funding and navigate investment processes',
                'scom_translations' => json_encode([
                    'en' => 'Educational workshops teaching startups how to secure funding and navigate investment processes',
                    'de' => 'Bildungsworkshops, die Startups beibringen, wie sie Finanzierung sichern und Investitionsprozesse navigieren',
                    'es' => 'Talleres educativos que enseñan a las startups cómo asegurar financiación y navegar procesos de inversión',
                    'pl' => 'Warsztaty edukacyjne uczące startupy, jak zabezpieczyć finansowanie i poruszać się w procesach inwestycyjnych'
                ])
            ],
            [
                'id' => 67,
                'parent_id' => 5,
                'slug' => 'investment-readiness-programs',
                'name' => 'Investment Readiness Programs',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Investment Readiness Programs',
                    'de' => 'Investment-Readiness-Programme',
                    'es' => 'Programas de Preparación para Inversión',
                    'pl' => 'Programy Gotowości Inwestycyjnej'
                ]),
                'scom' => 'Programs designed to prepare startups for investment rounds and due diligence processes',
                'scom_translations' => json_encode([
                    'en' => 'Programs designed to prepare startups for investment rounds and due diligence processes',
                    'de' => 'Programme zur Vorbereitung von Startups auf Finanzierungsrunden und Due-Diligence-Prozesse',
                    'es' => 'Programas diseñados para preparar startups para rondas de inversión y procesos de due diligence',
                    'pl' => 'Programy zaprojektowane w celu przygotowania startupów na rundy inwestycyjne i procesy due diligence'
                ])
            ],
            [
                'id' => 68,
                'parent_id' => 5,
                'slug' => 'due-diligence-sessions',
                'name' => 'Due Diligence Sessions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Due Diligence Sessions',
                    'de' => 'Due-Diligence-Sessions',
                    'es' => 'Sesiones de Due Diligence',
                    'pl' => 'Sesje Due Diligence'
                ]),
                'scom' => 'Educational sessions on due diligence processes, legal requirements, and investor evaluation criteria',
                'scom_translations' => json_encode([
                    'en' => 'Educational sessions on due diligence processes, legal requirements, and investor evaluation criteria',
                    'de' => 'Bildungssessions zu Due-Diligence-Prozessen, rechtlichen Anforderungen und Investor-Bewertungskriterien',
                    'es' => 'Sesiones educativas sobre procesos de due diligence, requisitos legales y criterios de evaluación de inversores',
                    'pl' => 'Sesje edukacyjne na temat procesów due diligence, wymagań prawnych i kryteriów oceny inwestorów'
                ])
            ],
            [
                'id' => 69,
                'parent_id' => 5,
                'slug' => 'investor-panels',
                'name' => 'Investor Panels',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Investor Panels',
                    'de' => 'Investor-Panels',
                    'es' => 'Paneles de Inversores',
                    'pl' => 'Panele Inwestorów'
                ]),
                'scom' => 'Panel discussions featuring multiple investors sharing insights and investment strategies',
                'scom_translations' => json_encode([
                    'en' => 'Panel discussions featuring multiple investors sharing insights and investment strategies',
                    'de' => 'Podiumsdiskussionen mit mehreren Investoren, die Einblicke und Investitionsstrategien teilen',
                    'es' => 'Discusiones de panel con múltiples inversores compartiendo perspectivas y estrategias de inversión',
                    'pl' => 'Dyskusje panelowe z udziałem wielu inwestorów dzielących się spostrzeżeniami i strategiami inwestycyjnymi'
                ])
            ],
            [
                'id' => 70,
                'parent_id' => 5,
                'slug' => 'fundraising-bootcamps',
                'name' => 'Fundraising Bootcamps',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Fundraising Bootcamps',
                    'de' => 'Fundraising-Bootcamps',
                    'es' => 'Bootcamps de Recaudación de Fondos',
                    'pl' => 'Bootcampy Fundraisingu'
                ]),
                'scom' => 'Intensive training programs focused on fundraising strategies, pitch preparation, and investor relations',
                'scom_translations' => json_encode([
                    'en' => 'Intensive training programs focused on fundraising strategies, pitch preparation, and investor relations',
                    'de' => 'Intensive Trainingsprogramme mit Fokus auf Fundraising-Strategien, Pitch-Vorbereitung und Investor Relations',
                    'es' => 'Programas de entrenamiento intensivo enfocados en estrategias de recaudación, preparación de pitches y relaciones con inversores',
                    'pl' => 'Intensywne programy szkoleniowe skoncentrowane na strategiach fundraisingu, przygotowaniu pitchy i relacjach z inwestorami'
                ])
            ],
            [
                'id' => 71,
                'parent_id' => 5,
                'slug' => 'capital-markets-events',
                'name' => 'Capital Markets Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Capital Markets Events',
                    'de' => 'Kapitalmarkt-Veranstaltungen',
                    'es' => 'Eventos de Mercados de Capital',
                    'pl' => 'Wydarzenia Rynków Kapitałowych'
                ]),
                'scom' => 'Events focused on capital markets, public offerings, and advanced funding mechanisms',
                'scom_translations' => json_encode([
                    'en' => 'Events focused on capital markets, public offerings, and advanced funding mechanisms',
                    'de' => 'Veranstaltungen mit Fokus auf Kapitalmärkte, öffentliche Angebote und fortgeschrittene Finanzierungsmechanismen',
                    'es' => 'Eventos enfocados en mercados de capital, ofertas públicas y mecanismos avanzados de financiación',
                    'pl' => 'Wydarzenia skoncentrowane na rynkach kapitałowych, ofertach publicznych i zaawansowanych mechanizmach finansowania'
                ])
            ],
            [
                'id' => 72,
                'parent_id' => 5,
                'slug' => 'ipo-preparation-sessions',
                'name' => 'IPO Preparation Sessions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'IPO Preparation Sessions',
                    'de' => 'IPO-Vorbereitungs-Sessions',
                    'es' => 'Sesiones de Preparación para IPO',
                    'pl' => 'Sesje Przygotowania do IPO'
                ]),
                'scom' => 'Educational sessions preparing companies for initial public offerings and public market readiness',
                'scom_translations' => json_encode([
                    'en' => 'Educational sessions preparing companies for initial public offerings and public market readiness',
                    'de' => 'Bildungssessions zur Vorbereitung von Unternehmen auf Börsengänge und Bereitschaft für öffentliche Märkte',
                    'es' => 'Sesiones educativas preparando empresas para ofertas públicas iniciales y preparación para mercados públicos',
                    'pl' => 'Sesje edukacyjne przygotowujące firmy do pierwszych ofert publicznych i gotowości na rynki publiczne'
                ])
            ],
            [
                'id' => 73,
                'parent_id' => 5,
                'slug' => 'other-investor-events',
                'name' => 'Other Investor Events',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Investor Events',
                    'de' => 'Andere Investorenveranstaltungen',
                    'es' => 'Otros Eventos para Inversores',
                    'pl' => 'Inne Wydarzenia dla Inwestorów'
                ]),
                'scom' => 'Other investor-related events that do not fit into the above subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Other investor-related events that do not fit into the above subcategories',
                    'de' => 'Andere investorenbezogene Veranstaltungen, die nicht in die oben genannten Unterkategorien passen',
                    'es' => 'Otros eventos relacionados con inversores que no encajan en las subcategorías anteriores',
                    'pl' => 'Inne wydarzenia związane z inwestorami, które nie pasują do powyższych podkategorii'
                ])
            ],
            [
                'id' => 74,
                'parent_id' => 6,
                'slug' => 'accelerator-demo-days',
                'name' => 'Accelerator Demo Days',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Accelerator Demo Days',
                    'de' => 'Accelerator-Demo-Tage',
                    'es' => 'Días de Demo de Aceleradoras',
                    'pl' => 'Dni Demo Akceleratorów'
                ]),
                'scom' => 'Showcase events where accelerator cohorts present their startups to investors and stakeholders',
                'scom_translations' => json_encode([
                    'en' => 'Showcase events where accelerator cohorts present their startups to investors and stakeholders',
                    'de' => 'Showcase-Veranstaltungen, bei denen Accelerator-Kohorten ihre Startups Investoren und Stakeholdern präsentieren',
                    'es' => 'Eventos de presentación donde las cohortes de aceleradoras presentan sus startups a inversores y stakeholders',
                    'pl' => 'Wydarzenia prezentacyjne, podczas których kohorty akceleratorów prezentują swoje startupy inwestorom i interesariuszom'
                ])
            ],
            [
                'id' => 75,
                'parent_id' => 6,
                'slug' => 'incubator-graduation-events',
                'name' => 'Incubator Graduation Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Incubator Graduation Events',
                    'de' => 'Inkubator-Abschlussveranstaltungen',
                    'es' => 'Eventos de Graduación de Incubadoras',
                    'pl' => 'Wydarzenia Ukończenia Inkubatorów'
                ]),
                'scom' => 'Ceremonial events celebrating the completion of incubator programs and startup achievements',
                'scom_translations' => json_encode([
                    'en' => 'Ceremonial events celebrating the completion of incubator programs and startup achievements',
                    'de' => 'Zeremonielle Veranstaltungen zur Feier des Abschlusses von Inkubator-Programmen und Startup-Erfolgen',
                    'es' => 'Eventos ceremoniales celebrando la finalización de programas de incubadoras y logros de startups',
                    'pl' => 'Wydarzenia ceremonialne świętujące ukończenie programów inkubatorów i osiągnięcia startupów'
                ])
            ],
            [
                'id' => 76,
                'parent_id' => 6,
                'slug' => 'cohort-presentations',
                'name' => 'Cohort Presentations',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Cohort Presentations',
                    'de' => 'Kohorten-Präsentationen',
                    'es' => 'Presentaciones de Cohortes',
                    'pl' => 'Prezentacje Kohort'
                ]),
                'scom' => 'Events where startup cohorts present their progress and achievements during accelerator programs',
                'scom_translations' => json_encode([
                    'en' => 'Events where startup cohorts present their progress and achievements during accelerator programs',
                    'de' => 'Veranstaltungen, bei denen Startup-Kohorten ihre Fortschritte und Erfolge während Accelerator-Programmen präsentieren',
                    'es' => 'Eventos donde las cohortes de startups presentan su progreso y logros durante programas de aceleradoras',
                    'pl' => 'Wydarzenia, podczas których kohorty startupów prezentują swoje postępy i osiągnięcia podczas programów akceleratorów'
                ])
            ],
            [
                'id' => 77,
                'parent_id' => 6,
                'slug' => 'mentor-matching-events',
                'name' => 'Mentor Matching Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Mentor Matching Events',
                    'de' => 'Mentor-Matching-Events',
                    'es' => 'Eventos de Matching de Mentores',
                    'pl' => 'Wydarzenia Dopasowywania Mentorów'
                ]),
                'scom' => 'Events designed to connect startups with suitable mentors and advisory support',
                'scom_translations' => json_encode([
                    'en' => 'Events designed to connect startups with suitable mentors and advisory support',
                    'de' => 'Veranstaltungen zur Verbindung von Startups mit geeigneten Mentoren und Beratungsunterstützung',
                    'es' => 'Eventos diseñados para conectar startups con mentores adecuados y apoyo asesor',
                    'pl' => 'Wydarzenia zaprojektowane w celu połączenia startupów z odpowiednimi mentorami i wsparciem doradczym'
                ])
            ],
            [
                'id' => 78,
                'parent_id' => 6,
                'slug' => 'program-orientations',
                'name' => 'Program Orientations',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Program Orientations',
                    'de' => 'Programm-Orientierungen',
                    'es' => 'Orientaciones de Programas',
                    'pl' => 'Orientacje Programów'
                ]),
                'scom' => 'Introduction events for new participants joining accelerator or incubator programs',
                'scom_translations' => json_encode([
                    'en' => 'Introduction events for new participants joining accelerator or incubator programs',
                    'de' => 'Einführungsveranstaltungen für neue Teilnehmer, die Accelerator- oder Inkubator-Programme beginnen',
                    'es' => 'Eventos de introducción para nuevos participantes que se unen a programas de aceleradoras o incubadoras',
                    'pl' => 'Wydarzenia wprowadzające dla nowych uczestników dołączających do programów akceleratorów lub inkubatorów'
                ])
            ],
            [
                'id' => 79,
                'parent_id' => 6,
                'slug' => 'alumni-events',
                'name' => 'Alumni Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Alumni Events',
                    'de' => 'Alumni-Events',
                    'es' => 'Eventos de Exalumnos',
                    'pl' => 'Wydarzenia Absolwentów'
                ]),
                'scom' => 'Networking and reunion events for graduates of accelerator and incubator programs',
                'scom_translations' => json_encode([
                    'en' => 'Networking and reunion events for graduates of accelerator and incubator programs',
                    'de' => 'Networking- und Wiedersehensveranstaltungen für Absolventen von Accelerator- und Inkubator-Programmen',
                    'es' => 'Eventos de networking y reunión para graduados de programas de aceleradoras e incubadoras',
                    'pl' => 'Wydarzenia networkingowe i spotkania absolwentów programów akceleratorów i inkubatorów'
                ])
            ],
            [
                'id' => 80,
                'parent_id' => 6,
                'slug' => 'selection-events',
                'name' => 'Selection Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Selection Events',
                    'de' => 'Auswahl-Events',
                    'es' => 'Eventos de Selección',
                    'pl' => 'Wydarzenia Selekcyjne'
                ]),
                'scom' => 'Events where potential participants pitch for admission to accelerator or incubator programs',
                'scom_translations' => json_encode([
                    'en' => 'Events where potential participants pitch for admission to accelerator or incubator programs',
                    'de' => 'Veranstaltungen, bei denen potenzielle Teilnehmer für die Aufnahme in Accelerator- oder Inkubator-Programme pitchen',
                    'es' => 'Eventos donde participantes potenciales hacen pitch para admisión a programas de aceleradoras o incubadoras',
                    'pl' => 'Wydarzenia, podczas których potencjalni uczestnicy prezentują się w celu przyjęcia do programów akceleratorów lub inkubatorów'
                ])
            ],
            [
                'id' => 81,
                'parent_id' => 6,
                'slug' => 'progress-reviews',
                'name' => 'Progress Reviews',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Progress Reviews',
                    'de' => 'Fortschritts-Reviews',
                    'es' => 'Revisiones de Progreso',
                    'pl' => 'Przeglądy Postępów'
                ]),
                'scom' => 'Regular review sessions to assess startup progress and provide feedback during programs',
                'scom_translations' => json_encode([
                    'en' => 'Regular review sessions to assess startup progress and provide feedback during programs',
                    'de' => 'Regelmäßige Review-Sessions zur Bewertung des Startup-Fortschritts und Feedback während der Programme',
                    'es' => 'Sesiones regulares de revisión para evaluar el progreso de startups y proporcionar retroalimentación durante programas',
                    'pl' => 'Regularne sesje przeglądu w celu oceny postępów startupów i przekazywania informacji zwrotnych podczas programów'
                ])
            ],
            [
                'id' => 82,
                'parent_id' => 6,
                'slug' => 'graduation-ceremonies',
                'name' => 'Graduation Ceremonies',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Graduation Ceremonies',
                    'de' => 'Abschlusszeremonien',
                    'es' => 'Ceremonias de Graduación',
                    'pl' => 'Ceremonie Ukończenia'
                ]),
                'scom' => 'Formal ceremonies celebrating the successful completion of accelerator or incubator programs',
                'scom_translations' => json_encode([
                    'en' => 'Formal ceremonies celebrating the successful completion of accelerator or incubator programs',
                    'de' => 'Formelle Zeremonien zur Feier des erfolgreichen Abschlusses von Accelerator- oder Inkubator-Programmen',
                    'es' => 'Ceremonias formales celebrando la finalización exitosa de programas de aceleradoras o incubadoras',
                    'pl' => 'Formalne ceremonie świętujące pomyślne ukończenie programów akceleratorów lub inkubatorów'
                ])
            ],
            [
                'id' => 83,
                'parent_id' => 6,
                'slug' => 'portfolio-company-events',
                'name' => 'Portfolio Company Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Portfolio Company Events',
                    'de' => 'Portfolio-Unternehmen-Events',
                    'es' => 'Eventos de Empresas del Portafolio',
                    'pl' => 'Wydarzenia Firm Portfelowych'
                ]),
                'scom' => 'Events featuring and supporting companies within accelerator or incubator portfolios',
                'scom_translations' => json_encode([
                    'en' => 'Events featuring and supporting companies within accelerator or incubator portfolios',
                    'de' => 'Veranstaltungen zur Präsentation und Unterstützung von Unternehmen in Accelerator- oder Inkubator-Portfolios',
                    'es' => 'Eventos que presentan y apoyan empresas dentro de portafolios de aceleradoras o incubadoras',
                    'pl' => 'Wydarzenia prezentujące i wspierające firmy w portfelach akceleratorów lub inkubatorów'
                ])
            ],
            [
                'id' => 84,
                'parent_id' => 6,
                'slug' => 'other-accelerator-incubator',
                'name' => 'Other Accelerator & Incubator Events',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Accelerator & Incubator Events',
                    'de' => 'Andere Accelerator- und Inkubatorveranstaltungen',
                    'es' => 'Otros Eventos de Aceleradoras e Incubadoras',
                    'pl' => 'Inne Wydarzenia Akceleratorów i Inkubatorów'
                ]),
                'scom' => 'Other accelerator and incubator events that do not fit into the above subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Other accelerator and incubator events that do not fit into the above subcategories',
                    'de' => 'Andere Accelerator- und Inkubatorveranstaltungen, die nicht in die oben genannten Unterkategorien passen',
                    'es' => 'Otros eventos de aceleradoras e incubadoras que no encajan en las subcategorías anteriores',
                    'pl' => 'Inne wydarzenia akceleratorów i inkubatorów, które nie pasują do powyższych podkategorii'
                ])
            ],
            [
                'id' => 85,
                'parent_id' => 7,
                'slug' => 'fintech-events',
                'name' => 'FinTech Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'FinTech Events',
                    'de' => 'FinTech-Events',
                    'es' => 'Eventos FinTech',
                    'pl' => 'Wydarzenia FinTech'
                ]),
                'scom' => 'Events focused on financial technology, digital banking, and innovative financial services',
                'scom_translations' => json_encode([
                    'en' => 'Events focused on financial technology, digital banking, and innovative financial services',
                    'de' => 'Veranstaltungen mit Fokus auf Finanztechnologie, digitales Banking und innovative Finanzdienstleistungen',
                    'es' => 'Eventos enfocados en tecnología financiera, banca digital y servicios financieros innovadores',
                    'pl' => 'Wydarzenia skoncentrowane na technologii finansowej, bankowości cyfrowej i innowacyjnych usługach finansowych'
                ])
            ],
            [
                'id' => 86,
                'parent_id' => 7,
                'slug' => 'healthtech-conferences',
                'name' => 'HealthTech Conferences',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'HealthTech Conferences',
                    'de' => 'HealthTech-Konferenzen',
                    'es' => 'Conferencias HealthTech',
                    'pl' => 'Konferencje HealthTech'
                ]),
                'scom' => 'Conferences dedicated to healthcare technology, medical innovations, and digital health solutions',
                'scom_translations' => json_encode([
                    'en' => 'Conferences dedicated to healthcare technology, medical innovations, and digital health solutions',
                    'de' => 'Konferenzen zu Gesundheitstechnologie, medizinischen Innovationen und digitalen Gesundheitslösungen',
                    'es' => 'Conferencias dedicadas a tecnología sanitaria, innovaciones médicas y soluciones de salud digital',
                    'pl' => 'Konferencje poświęcone technologii opieki zdrowotnej, innowacjom medycznym i cyfrowym rozwiązaniom zdrowotnym'
                ])
            ],
            [
                'id' => 87,
                'parent_id' => 7,
                'slug' => 'edtech-summits',
                'name' => 'EdTech Summits',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'EdTech Summits',
                    'de' => 'EdTech-Gipfeltreffen',
                    'es' => 'Cumbres EdTech',
                    'pl' => 'Szczyty EdTech'
                ]),
                'scom' => 'Summits focusing on educational technology, e-learning platforms, and innovative learning solutions',
                'scom_translations' => json_encode([
                    'en' => 'Summits focusing on educational technology, e-learning platforms, and innovative learning solutions',
                    'de' => 'Gipfeltreffen mit Fokus auf Bildungstechnologie, E-Learning-Plattformen und innovative Lernlösungen',
                    'es' => 'Cumbres enfocadas en tecnología educativa, plataformas de e-learning y soluciones de aprendizaje innovadoras',
                    'pl' => 'Szczyty skoncentrowane na technologii edukacyjnej, platformach e-learningowych i innowacyjnych rozwiązaniach edukacyjnych'
                ])
            ],
            [
                'id' => 88,
                'parent_id' => 7,
                'slug' => 'e-commerce-events',
                'name' => 'E-commerce Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'E-commerce Events',
                    'de' => 'E-Commerce-Events',
                    'es' => 'Eventos de E-commerce',
                    'pl' => 'Wydarzenia E-commerce'
                ]),
                'scom' => 'Events covering online retail, digital marketplaces, and e-commerce technologies',
                'scom_translations' => json_encode([
                    'en' => 'Events covering online retail, digital marketplaces, and e-commerce technologies',
                    'de' => 'Veranstaltungen zu Online-Handel, digitalen Marktplätzen und E-Commerce-Technologien',
                    'es' => 'Eventos que cubren comercio minorista en línea, mercados digitales y tecnologías de e-commerce',
                    'pl' => 'Wydarzenia obejmujące handel online, rynki cyfrowe i technologie e-commerce'
                ])
            ],
            [
                'id' => 89,
                'parent_id' => 7,
                'slug' => 'saas-conferences',
                'name' => 'SaaS Conferences',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'SaaS Conferences',
                    'de' => 'SaaS-Konferenzen',
                    'es' => 'Conferencias SaaS',
                    'pl' => 'Konferencje SaaS'
                ]),
                'scom' => 'Conferences focused on Software as a Service, cloud computing, and subscription-based business models',
                'scom_translations' => json_encode([
                    'en' => 'Conferences focused on Software as a Service, cloud computing, and subscription-based business models',
                    'de' => 'Konferenzen mit Fokus auf Software as a Service, Cloud Computing und abonnementbasierte Geschäftsmodelle',
                    'es' => 'Conferencias enfocadas en Software como Servicio, computación en la nube y modelos de negocio basados en suscripción',
                    'pl' => 'Konferencje skoncentrowane na Software as a Service, cloud computing i modelach biznesowych opartych na subskrypcji'
                ])
            ],
            [
                'id' => 90,
                'parent_id' => 7,
                'slug' => 'ai-machine-learning-events',
                'name' => 'AI & Machine Learning Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'AI & Machine Learning Events',
                    'de' => 'KI & Machine Learning Events',
                    'es' => 'Eventos de IA y Machine Learning',
                    'pl' => 'Wydarzenia AI i Machine Learning'
                ]),
                'scom' => 'Events dedicated to artificial intelligence, machine learning, and emerging AI technologies',
                'scom_translations' => json_encode([
                    'en' => 'Events dedicated to artificial intelligence, machine learning, and emerging AI technologies',
                    'de' => 'Veranstaltungen zu künstlicher Intelligenz, maschinellem Lernen und neuen KI-Technologien',
                    'es' => 'Eventos dedicados a inteligencia artificial, machine learning y tecnologías emergentes de IA',
                    'pl' => 'Wydarzenia poświęcone sztucznej inteligencji, machine learning i nowym technologiom AI'
                ])
            ],
            [
                'id' => 91,
                'parent_id' => 7,
                'slug' => 'blockchain-crypto-events',
                'name' => 'Blockchain & Crypto Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Blockchain & Crypto Events',
                    'de' => 'Blockchain & Krypto-Events',
                    'es' => 'Eventos de Blockchain y Cripto',
                    'pl' => 'Wydarzenia Blockchain i Krypto'
                ]),
                'scom' => 'Events focusing on blockchain technology, cryptocurrency, and decentralized applications',
                'scom_translations' => json_encode([
                    'en' => 'Events focusing on blockchain technology, cryptocurrency, and decentralized applications',
                    'de' => 'Veranstaltungen mit Fokus auf Blockchain-Technologie, Kryptowährung und dezentrale Anwendungen',
                    'es' => 'Eventos enfocados en tecnología blockchain, criptomonedas y aplicaciones descentralizadas',
                    'pl' => 'Wydarzenia skoncentrowane na technologii blockchain, kryptowalutach i zdecentralizowanych aplikacjach'
                ])
            ],
            [
                'id' => 92,
                'parent_id' => 7,
                'slug' => 'cleantech-summits',
                'name' => 'CleanTech Summits',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'CleanTech Summits',
                    'de' => 'CleanTech-Gipfeltreffen',
                    'es' => 'Cumbres CleanTech',
                    'pl' => 'Szczyty CleanTech'
                ]),
                'scom' => 'Summits dedicated to clean technology, renewable energy, and sustainable innovation',
                'scom_translations' => json_encode([
                    'en' => 'Summits dedicated to clean technology, renewable energy, and sustainable innovation',
                    'de' => 'Gipfeltreffen zu sauberen Technologien, erneuerbaren Energien und nachhaltigen Innovationen',
                    'es' => 'Cumbres dedicadas a tecnología limpia, energía renovable e innovación sostenible',
                    'pl' => 'Szczyty poświęcone czystej technologii, energii odnawialnej i zrównoważonym innowacjom'
                ])
            ],
            [
                'id' => 93,
                'parent_id' => 7,
                'slug' => 'foodtech-events',
                'name' => 'FoodTech Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'FoodTech Events',
                    'de' => 'FoodTech-Events',
                    'es' => 'Eventos FoodTech',
                    'pl' => 'Wydarzenia FoodTech'
                ]),
                'scom' => 'Events focusing on food technology, agriculture innovation, and food delivery solutions',
                'scom_translations' => json_encode([
                    'en' => 'Events focusing on food technology, agriculture innovation, and food delivery solutions',
                    'de' => 'Veranstaltungen mit Fokus auf Lebensmitteltechnologie, Agrarinnovation und Lebensmittellieferlösungen',
                    'es' => 'Eventos enfocados en tecnología alimentaria, innovación agrícola y soluciones de entrega de alimentos',
                    'pl' => 'Wydarzenia skoncentrowane na technologii żywności, innowacjach rolniczych i rozwiązaniach dostawy żywności'
                ])
            ],
            [
                'id' => 94,
                'parent_id' => 7,
                'slug' => 'proptech-conferences',
                'name' => 'PropTech Conferences',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'PropTech Conferences',
                    'de' => 'PropTech-Konferenzen',
                    'es' => 'Conferencias PropTech',
                    'pl' => 'Konferencje PropTech'
                ]),
                'scom' => 'Conferences dedicated to property technology, real estate innovation, and smart building solutions',
                'scom_translations' => json_encode([
                    'en' => 'Conferences dedicated to property technology, real estate innovation, and smart building solutions',
                    'de' => 'Konferenzen zu Immobilientechnologie, Immobilieninnovation und intelligenten Gebäudelösungen',
                    'es' => 'Conferencias dedicadas a tecnología inmobiliaria, innovación en bienes raíces y soluciones de edificios inteligentes',
                    'pl' => 'Konferencje poświęcone technologii nieruchomości, innowacjom w nieruchomościach i rozwiązaniom inteligentnych budynków'
                ])
            ],
            [
                'id' => 95,
                'parent_id' => 7,
                'slug' => 'other-industry-specific',
                'name' => 'Other Industry-Specific Events',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Industry-Specific Events',
                    'de' => 'Andere branchenspezifische Veranstaltungen',
                    'es' => 'Otros Eventos Específicos de la Industria',
                    'pl' => 'Inne Wydarzenia Specyficzne dla Branży'
                ]),
                'scom' => 'Other industry-specific events that do not fit into the above subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Other industry-specific events that do not fit into the above subcategories',
                    'de' => 'Andere branchenspezifische Veranstaltungen, die nicht in die oben genannten Unterkategorien passen',
                    'es' => 'Otros eventos específicos de la industria que no encajan en las subcategorías anteriores',
                    'pl' => 'Inne wydarzenia specyficzne dla branży, które nie pasują do powyższych podkategorii'
                ])
            ],
            [
                'id' => 96,
                'parent_id' => 8,
                'slug' => 'mentor-speed-dating',
                'name' => 'Mentor Speed Dating',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Mentor Speed Dating',
                    'de' => 'Mentor-Speed-Dating',
                    'es' => 'Speed Dating de Mentores',
                    'pl' => 'Speed Dating Mentorów'
                ]),
                'scom' => 'Fast-paced events where entrepreneurs meet multiple mentors in short sessions to find the right match',
                'scom_translations' => json_encode([
                    'en' => 'Fast-paced events where entrepreneurs meet multiple mentors in short sessions to find the right match',
                    'de' => 'Schnelllebige Veranstaltungen, bei denen Unternehmer mehrere Mentoren in kurzen Sessions treffen, um das richtige Match zu finden',
                    'es' => 'Eventos de ritmo rápido donde los emprendedores conocen múltiples mentores en sesiones cortas para encontrar la combinación correcta',
                    'pl' => 'Szybkie wydarzenia, podczas których przedsiębiorcy spotykają wielu mentorów w krótkich sesjach, aby znaleźć odpowiednie dopasowanie'
                ])
            ],
            [
                'id' => 97,
                'parent_id' => 8,
                'slug' => 'advisory-board-events',
                'name' => 'Advisory Board Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Advisory Board Events',
                    'de' => 'Beirats-Events',
                    'es' => 'Eventos de Juntas Asesoras',
                    'pl' => 'Wydarzenia Rad Doradczych'
                ]),
                'scom' => 'Events focused on building and managing advisory boards for startups and growing companies',
                'scom_translations' => json_encode([
                    'en' => 'Events focused on building and managing advisory boards for startups and growing companies',
                    'de' => 'Veranstaltungen mit Fokus auf Aufbau und Management von Beiräten für Startups und wachsende Unternehmen',
                    'es' => 'Eventos enfocados en construir y gestionar juntas asesoras para startups y empresas en crecimiento',
                    'pl' => 'Wydarzenia skoncentrowane na budowaniu i zarządzaniu radami doradczymi dla startupów i rozwijających się firm'
                ])
            ],
            [
                'id' => 98,
                'parent_id' => 8,
                'slug' => 'one-on-one-mentoring-sessions',
                'name' => 'One-on-One Mentoring Sessions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'One-on-One Mentoring Sessions',
                    'de' => 'Eins-zu-Eins-Mentoring-Sessions',
                    'es' => 'Sesiones de Mentoría Uno a Uno',
                    'pl' => 'Sesje Mentoringu Jeden na Jeden'
                ]),
                'scom' => 'Individual mentoring sessions providing personalized guidance and support for entrepreneurs',
                'scom_translations' => json_encode([
                    'en' => 'Individual mentoring sessions providing personalized guidance and support for entrepreneurs',
                    'de' => 'Individuelle Mentoring-Sessions, die personalisierte Anleitung und Unterstützung für Unternehmer bieten',
                    'es' => 'Sesiones individuales de mentoría que proporcionan orientación personalizada y apoyo para emprendedores',
                    'pl' => 'Indywidualne sesje mentoringu zapewniające spersonalizowane wskazówki i wsparcie dla przedsiębiorców'
                ])
            ],
            [
                'id' => 99,
                'parent_id' => 8,
                'slug' => 'group-mentoring-programs',
                'name' => 'Group Mentoring Programs',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Group Mentoring Programs',
                    'de' => 'Gruppen-Mentoring-Programme',
                    'es' => 'Programas de Mentoría Grupal',
                    'pl' => 'Programy Mentoringu Grupowego'
                ]),
                'scom' => 'Structured mentoring programs where groups of entrepreneurs learn together under expert guidance',
                'scom_translations' => json_encode([
                    'en' => 'Structured mentoring programs where groups of entrepreneurs learn together under expert guidance',
                    'de' => 'Strukturierte Mentoring-Programme, bei denen Gruppen von Unternehmern gemeinsam unter Expertenanleitung lernen',
                    'es' => 'Programas estructurados de mentoría donde grupos de emprendedores aprenden juntos bajo la guía de expertos',
                    'pl' => 'Strukturalne programy mentoringu, w których grupy przedsiębiorców uczą się razem pod kierunkiem ekspertów'
                ])
            ],
            [
                'id' => 100,
                'parent_id' => 8,
                'slug' => 'expert-office-hours',
                'name' => 'Expert Office Hours',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Expert Office Hours',
                    'de' => 'Experten-Sprechstunden',
                    'es' => 'Horas de Oficina de Expertos',
                    'pl' => 'Godziny Urzędowania Ekspertów'
                ]),
                'scom' => 'Regular office hours where industry experts are available for consultations and advice',
                'scom_translations' => json_encode([
                    'en' => 'Regular office hours where industry experts are available for consultations and advice',
                    'de' => 'Regelmäßige Sprechstunden, in denen Branchenexperten für Beratungen und Ratschläge zur Verfügung stehen',
                    'es' => 'Horas de oficina regulares donde expertos de la industria están disponibles para consultas y consejos',
                    'pl' => 'Regularne godziny urzędowania, podczas których eksperci branżowi są dostępni na konsultacje i porady'
                ])
            ],
            [
                'id' => 101,
                'parent_id' => 8,
                'slug' => 'industry-expert-panels',
                'name' => 'Industry Expert Panels',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Industry Expert Panels',
                    'de' => 'Branchenexperten-Panels',
                    'es' => 'Paneles de Expertos de la Industria',
                    'pl' => 'Panele Ekspertów Branżowych'
                ]),
                'scom' => 'Panel discussions featuring industry experts sharing insights and answering questions from entrepreneurs',
                'scom_translations' => json_encode([
                    'en' => 'Panel discussions featuring industry experts sharing insights and answering questions from entrepreneurs',
                    'de' => 'Podiumsdiskussionen mit Branchenexperten, die Einblicke teilen und Fragen von Unternehmern beantworten',
                    'es' => 'Discusiones de panel con expertos de la industria compartiendo perspectivas y respondiendo preguntas de emprendedores',
                    'pl' => 'Dyskusje panelowe z udziałem ekspertów branżowych dzielących się spostrzeżeniami i odpowiadających na pytania przedsiębiorców'
                ])
            ],
            [
                'id' => 102,
                'parent_id' => 8,
                'slug' => 'advisor-matching-events',
                'name' => 'Advisor Matching Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Advisor Matching Events',
                    'de' => 'Berater-Matching-Events',
                    'es' => 'Eventos de Matching de Asesores',
                    'pl' => 'Wydarzenia Dopasowywania Doradców'
                ]),
                'scom' => 'Events designed to connect startups with suitable advisors based on industry expertise and needs',
                'scom_translations' => json_encode([
                    'en' => 'Events designed to connect startups with suitable advisors based on industry expertise and needs',
                    'de' => 'Veranstaltungen zur Verbindung von Startups mit geeigneten Beratern basierend auf Branchenexpertise und Bedürfnissen',
                    'es' => 'Eventos diseñados para conectar startups con asesores adecuados basados en experiencia de la industria y necesidades',
                    'pl' => 'Wydarzenia zaprojektowane w celu połączenia startupów z odpowiednimi doradcami na podstawie ekspertyzy branżowej i potrzeb'
                ])
            ],
            [
                'id' => 103,
                'parent_id' => 8,
                'slug' => 'mentorship-program-launches',
                'name' => 'Mentorship Program Launches',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Mentorship Program Launches',
                    'de' => 'Mentorship-Programm-Launches',
                    'es' => 'Lanzamientos de Programas de Mentoría',
                    'pl' => 'Uruchomienia Programów Mentoringu'
                ]),
                'scom' => 'Launch events introducing new mentorship programs and connecting mentors with mentees',
                'scom_translations' => json_encode([
                    'en' => 'Launch events introducing new mentorship programs and connecting mentors with mentees',
                    'de' => 'Launch-Veranstaltungen zur Einführung neuer Mentorship-Programme und Verbindung von Mentoren mit Mentees',
                    'es' => 'Eventos de lanzamiento introduciendo nuevos programas de mentoría y conectando mentores con aprendices',
                    'pl' => 'Wydarzenia uruchomienia wprowadzające nowe programy mentoringu i łączące mentorów z podopiecznymi'
                ])
            ],
            [
                'id' => 104,
                'parent_id' => 8,
                'slug' => 'success-story-sessions',
                'name' => 'Success Story Sessions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Success Story Sessions',
                    'de' => 'Erfolgsgeschichten-Sessions',
                    'es' => 'Sesiones de Historias de Éxito',
                    'pl' => 'Sesje Historii Sukcesu'
                ]),
                'scom' => 'Sessions where successful entrepreneurs share their journey and lessons learned with aspiring founders',
                'scom_translations' => json_encode([
                    'en' => 'Sessions where successful entrepreneurs share their journey and lessons learned with aspiring founders',
                    'de' => 'Sessions, in denen erfolgreiche Unternehmer ihre Reise und gelernten Lektionen mit angehenden Gründern teilen',
                    'es' => 'Sesiones donde emprendedores exitosos comparten su viaje y lecciones aprendidas con fundadores aspirantes',
                    'pl' => 'Sesje, podczas których odnoszący sukcesy przedsiębiorcy dzielą się swoją podróżą i wyciągniętymi naukami z aspirującymi założycielami'
                ])
            ],
            [
                'id' => 105,
                'parent_id' => 8,
                'slug' => 'peer-advisory-groups',
                'name' => 'Peer Advisory Groups',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Peer Advisory Groups',
                    'de' => 'Peer-Advisory-Gruppen',
                    'es' => 'Grupos de Asesoría entre Pares',
                    'pl' => 'Grupy Doradcze Rówieśników'
                ]),
                'scom' => 'Structured groups where entrepreneurs provide mutual advice and support to each other',
                'scom_translations' => json_encode([
                    'en' => 'Structured groups where entrepreneurs provide mutual advice and support to each other',
                    'de' => 'Strukturierte Gruppen, in denen Unternehmer sich gegenseitig Rat und Unterstützung bieten',
                    'es' => 'Grupos estructurados donde los emprendedores se proporcionan consejos mutuos y apoyo entre sí',
                    'pl' => 'Strukturalne grupy, w których przedsiębiorcy udzielają sobie wzajemnych rad i wsparcia'
                ])
            ],
            [
                'id' => 106,
                'parent_id' => 8,
                'slug' => 'other-mentorship-advisory',
                'name' => 'Other Mentorship & Advisory Events',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Mentorship & Advisory Events',
                    'de' => 'Andere Mentoring- und Beratungsveranstaltungen',
                    'es' => 'Otros Eventos de Mentoría y Asesoría',
                    'pl' => 'Inne Wydarzenia Mentoringowe i Doradcze'
                ]),
                'scom' => 'Other mentorship and advisory events that do not fit into the above subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Other mentorship and advisory events that do not fit into the above subcategories',
                    'de' => 'Andere Mentoring- und Beratungsveranstaltungen, die nicht in die oben genannten Unterkategorien passen',
                    'es' => 'Otros eventos de mentoría y asesoría que no encajan en las subcategorías anteriores',
                    'pl' => 'Inne wydarzenia mentoringowe i doradcze, które nie pasują do powyższych podkategorii'
                ])
            ],
            [
                'id' => 107,
                'parent_id' => 9,
                'slug' => 'product-launch-events',
                'name' => 'Product Launch Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Product Launch Events',
                    'de' => 'Produkteinführungsveranstaltungen',
                    'es' => 'Eventos de Lanzamiento de Productos',
                    'pl' => 'Wydarzenia Wprowadzenia Produktów'
                ]),
                'scom' => 'Events dedicated to launching and showcasing new products to customers, media, and stakeholders',
                'scom_translations' => json_encode([
                    'en' => 'Events dedicated to launching and showcasing new products to customers, media, and stakeholders',
                    'de' => 'Veranstaltungen zur Einführung und Präsentation neuer Produkte für Kunden, Medien und Stakeholder',
                    'es' => 'Eventos dedicados a lanzar y mostrar nuevos productos a clientes, medios y stakeholders',
                    'pl' => 'Wydarzenia poświęcone wprowadzaniu i prezentowaniu nowych produktów klientom, mediom i interesariuszom'
                ])
            ],
            [
                'id' => 108,
                'parent_id' => 9,
                'slug' => 'tech-talks',
                'name' => 'Tech Talks',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Tech Talks',
                    'de' => 'Tech-Talks',
                    'es' => 'Charlas Tecnológicas',
                    'pl' => 'Wykłady Technologiczne'
                ]),
                'scom' => 'Technical presentations and discussions about emerging technologies, development practices, and innovations',
                'scom_translations' => json_encode([
                    'en' => 'Technical presentations and discussions about emerging technologies, development practices, and innovations',
                    'de' => 'Technische Präsentationen und Diskussionen über neue Technologien, Entwicklungspraktiken und Innovationen',
                    'es' => 'Presentaciones técnicas y discusiones sobre tecnologías emergentes, prácticas de desarrollo e innovaciones',
                    'pl' => 'Prezentacje techniczne i dyskusje na temat nowych technologii, praktyk rozwojowych i innowacji'
                ])
            ],
            [
                'id' => 109,
                'parent_id' => 9,
                'slug' => 'product-management-events',
                'name' => 'Product Management Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Product Management Events',
                    'de' => 'Produktmanagement-Events',
                    'es' => 'Eventos de Gestión de Productos',
                    'pl' => 'Wydarzenia Zarządzania Produktem'
                ]),
                'scom' => 'Events focused on product management strategies, roadmapping, and product development lifecycle',
                'scom_translations' => json_encode([
                    'en' => 'Events focused on product management strategies, roadmapping, and product development lifecycle',
                    'de' => 'Veranstaltungen mit Fokus auf Produktmanagement-Strategien, Roadmapping und Produktentwicklungszyklen',
                    'es' => 'Eventos enfocados en estrategias de gestión de productos, roadmapping y ciclo de vida de desarrollo de productos',
                    'pl' => 'Wydarzenia skoncentrowane na strategiach zarządzania produktem, mapowaniu drogowych i cyklu rozwoju produktu'
                ])
            ],
            [
                'id' => 110,
                'parent_id' => 9,
                'slug' => 'user-experience-workshops',
                'name' => 'User Experience Workshops',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'User Experience Workshops',
                    'de' => 'User-Experience-Workshops',
                    'es' => 'Talleres de Experiencia de Usuario',
                    'pl' => 'Warsztaty Doświadczenia Użytkownika'
                ]),
                'scom' => 'Workshops focusing on UX design, user research, and creating exceptional user experiences',
                'scom_translations' => json_encode([
                    'en' => 'Workshops focusing on UX design, user research, and creating exceptional user experiences',
                    'de' => 'Workshops mit Fokus auf UX-Design, Nutzerforschung und die Schaffung außergewöhnlicher Nutzererfahrungen',
                    'es' => 'Talleres enfocados en diseño UX, investigación de usuarios y creación de experiencias excepcionales de usuario',
                    'pl' => 'Warsztaty skoncentrowane na projektowaniu UX, badaniach użytkowników i tworzeniu wyjątkowych doświadczeń użytkownika'
                ])
            ],
            [
                'id' => 111,
                'parent_id' => 9,
                'slug' => 'development-meetups',
                'name' => 'Development Meetups',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Development Meetups',
                    'de' => 'Entwickler-Meetups',
                    'es' => 'Encuentros de Desarrollo',
                    'pl' => 'Spotkania Programistów'
                ]),
                'scom' => 'Regular meetups for developers to share knowledge, discuss coding practices, and network',
                'scom_translations' => json_encode([
                    'en' => 'Regular meetups for developers to share knowledge, discuss coding practices, and network',
                    'de' => 'Regelmäßige Meetups für Entwickler zum Wissensaustausch, zur Diskussion von Programmierverfahren und zum Networking',
                    'es' => 'Encuentros regulares para desarrolladores para compartir conocimiento, discutir prácticas de codificación y hacer networking',
                    'pl' => 'Regularne spotkania dla programistów w celu dzielenia się wiedzą, omawiania praktyk kodowania i networkingu'
                ])
            ],
            [
                'id' => 112,
                'parent_id' => 9,
                'slug' => 'api-workshops',
                'name' => 'API Workshops',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'API Workshops',
                    'de' => 'API-Workshops',
                    'es' => 'Talleres de API',
                    'pl' => 'Warsztaty API'
                ]),
                'scom' => 'Technical workshops focused on API development, integration, and best practices',
                'scom_translations' => json_encode([
                    'en' => 'Technical workshops focused on API development, integration, and best practices',
                    'de' => 'Technische Workshops mit Fokus auf API-Entwicklung, Integration und bewährte Praktiken',
                    'es' => 'Talleres técnicos enfocados en desarrollo de API, integración y mejores prácticas',
                    'pl' => 'Warsztaty techniczne skoncentrowane na rozwoju API, integracji i najlepszych praktykach'
                ])
            ],
            [
                'id' => 113,
                'parent_id' => 9,
                'slug' => 'open-source-events',
                'name' => 'Open Source Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Open Source Events',
                    'de' => 'Open-Source-Events',
                    'es' => 'Eventos de Código Abierto',
                    'pl' => 'Wydarzenia Open Source'
                ]),
                'scom' => 'Events celebrating and promoting open source software, contributions, and community collaboration',
                'scom_translations' => json_encode([
                    'en' => 'Events celebrating and promoting open source software, contributions, and community collaboration',
                    'de' => 'Veranstaltungen zur Feier und Förderung von Open-Source-Software, Beiträgen und Community-Zusammenarbeit',
                    'es' => 'Eventos celebrando y promoviendo software de código abierto, contribuciones y colaboración comunitaria',
                    'pl' => 'Wydarzenia celebrujące i promujące oprogramowanie open source, wkład społeczności i współpracę'
                ])
            ],
            [
                'id' => 114,
                'parent_id' => 9,
                'slug' => 'beta-testing-events',
                'name' => 'Beta Testing Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Beta Testing Events',
                    'de' => 'Beta-Testing-Events',
                    'es' => 'Eventos de Pruebas Beta',
                    'pl' => 'Wydarzenia Testów Beta'
                ]),
                'scom' => 'Events where startups showcase beta versions of products and gather user feedback',
                'scom_translations' => json_encode([
                    'en' => 'Events where startups showcase beta versions of products and gather user feedback',
                    'de' => 'Veranstaltungen, bei denen Startups Beta-Versionen ihrer Produkte präsentieren und Nutzerfeedback sammeln',
                    'es' => 'Eventos donde las startups muestran versiones beta de productos y recopilan comentarios de usuarios',
                    'pl' => 'Wydarzenia, podczas których startupy prezentują wersje beta produktów i zbierają opinie użytkowników'
                ])
            ],
            [
                'id' => 115,
                'parent_id' => 9,
                'slug' => 'product-feedback-sessions',
                'name' => 'Product Feedback Sessions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Product Feedback Sessions',
                    'de' => 'Produkt-Feedback-Sessions',
                    'es' => 'Sesiones de Retroalimentación de Productos',
                    'pl' => 'Sesje Opinii o Produktach'
                ]),
                'scom' => 'Interactive sessions where companies collect valuable feedback from users and customers about their products',
                'scom_translations' => json_encode([
                    'en' => 'Interactive sessions where companies collect valuable feedback from users and customers about their products',
                    'de' => 'Interaktive Sessions, in denen Unternehmen wertvolles Feedback von Nutzern und Kunden zu ihren Produkten sammeln',
                    'es' => 'Sesiones interactivas donde las empresas recopilan comentarios valiosos de usuarios y clientes sobre sus productos',
                    'pl' => 'Interaktywne sesje, podczas których firmy zbierają cenne opinie od użytkowników i klientów na temat swoich produktów'
                ])
            ],
            [
                'id' => 116,
                'parent_id' => 9,
                'slug' => 'technology-demonstrations',
                'name' => 'Technology Demonstrations',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Technology Demonstrations',
                    'de' => 'Technologie-Demonstrationen',
                    'es' => 'Demostraciones Tecnológicas',
                    'pl' => 'Demonstracje Technologiczne'
                ]),
                'scom' => 'Live demonstrations of cutting-edge technologies, prototypes, and innovative solutions',
                'scom_translations' => json_encode([
                    'en' => 'Live demonstrations of cutting-edge technologies, prototypes, and innovative solutions',
                    'de' => 'Live-Demonstrationen modernster Technologien, Prototypen und innovativer Lösungen',
                    'es' => 'Demostraciones en vivo de tecnologías de vanguardia, prototipos y soluciones innovadoras',
                    'pl' => 'Demonstracje na żywo najnowocześniejszych technologii, prototypów i innowacyjnych rozwiązań'
                ])
            ],
            [
                'id' => 117,
                'parent_id' => 9,
                'slug' => 'other-product-technology',
                'name' => 'Other Product & Technology Events',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Product & Technology Events',
                    'de' => 'Andere Produkt- und Technologieveranstaltungen',
                    'es' => 'Otros Eventos de Producto y Tecnología',
                    'pl' => 'Inne Wydarzenia Produktowe i Technologiczne'
                ]),
                'scom' => 'Other product and technology events that do not fit into the above subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Other product and technology events that do not fit into the above subcategories',
                    'de' => 'Andere Produkt- und Technologieveranstaltungen, die nicht in die oben genannten Unterkategorien passen',
                    'es' => 'Otros eventos de producto y tecnología que no encajan en las subcategorías anteriores',
                    'pl' => 'Inne wydarzenia produktowe i technologiczne, które nie pasują do powyższych podkategorii'
                ])
            ],
            [
                'id' => 118,
                'parent_id' => 10,
                'slug' => 'startup-hackathons',
                'name' => 'Startup Hackathons',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Startup Hackathons',
                    'de' => 'Startup-Hackathons',
                    'es' => 'Hackatones de Startups',
                    'pl' => 'Hackathony Startupowe'
                ]),
                'scom' => 'Intensive coding events focused on building startup ideas and prototypes in a limited timeframe',
                'scom_translations' => json_encode([
                    'en' => 'Intensive coding events focused on building startup ideas and prototypes in a limited timeframe',
                    'de' => 'Intensive Programmierveranstaltungen mit Fokus auf Aufbau von Startup-Ideen und Prototypen in begrenzter Zeit',
                    'es' => 'Eventos intensivos de programación enfocados en construir ideas de startups y prototipos en un tiempo limitado',
                    'pl' => 'Intensywne wydarzenia programistyczne skoncentrowane na budowaniu pomysłów startupowych i prototypów w ograniczonym czasie'
                ])
            ],
            [
                'id' => 119,
                'parent_id' => 10,
                'slug' => 'innovation-challenges',
                'name' => 'Innovation Challenges',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Innovation Challenges',
                    'de' => 'Innovations-Herausforderungen',
                    'es' => 'Desafíos de Innovación',
                    'pl' => 'Wyzwania Innowacyjne'
                ]),
                'scom' => 'Challenge-based events encouraging innovative solutions to specific problems or industry challenges',
                'scom_translations' => json_encode([
                    'en' => 'Challenge-based events encouraging innovative solutions to specific problems or industry challenges',
                    'de' => 'Challenge-basierte Veranstaltungen, die innovative Lösungen für spezifische Probleme oder Branchenherausforderungen fördern',
                    'es' => 'Eventos basados en desafíos que fomentan soluciones innovadoras a problemas específicos o desafíos de la industria',
                    'pl' => 'Wydarzenia oparte na wyzwaniach zachęcających do innowacyjnych rozwiązań konkretnych problemów lub wyzwań branżowych'
                ])
            ],
            [
                'id' => 120,
                'parent_id' => 10,
                'slug' => 'ideathons',
                'name' => 'Ideathons',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Ideathons',
                    'de' => 'Ideathons',
                    'es' => 'Ideathones',
                    'pl' => 'Ideathony'
                ]),
                'scom' => 'Brainstorming events focused on generating and developing innovative ideas and concepts',
                'scom_translations' => json_encode([
                    'en' => 'Brainstorming events focused on generating and developing innovative ideas and concepts',
                    'de' => 'Brainstorming-Veranstaltungen mit Fokus auf Generierung und Entwicklung innovativer Ideen und Konzepte',
                    'es' => 'Eventos de lluvia de ideas enfocados en generar y desarrollar ideas y conceptos innovadores',
                    'pl' => 'Wydarzenia burzy mózgów skoncentrowane na generowaniu i rozwijaniu innowacyjnych pomysłów i koncepcji'
                ])
            ],
            [
                'id' => 121,
                'parent_id' => 10,
                'slug' => 'coding-competitions',
                'name' => 'Coding Competitions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Coding Competitions',
                    'de' => 'Programmier-Wettbewerbe',
                    'es' => 'Competencias de Programación',
                    'pl' => 'Konkursy Programistyczne'
                ]),
                'scom' => 'Competitive programming events where developers solve algorithmic challenges and coding problems',
                'scom_translations' => json_encode([
                    'en' => 'Competitive programming events where developers solve algorithmic challenges and coding problems',
                    'de' => 'Wettbewerbsprogrammierveranstaltungen, bei denen Entwickler algorithmische Herausforderungen und Programmierprobleme lösen',
                    'es' => 'Eventos de programación competitiva donde los desarrolladores resuelven desafíos algorítmicos y problemas de codificación',
                    'pl' => 'Wydarzenia programowania konkurencyjnego, podczas których programiści rozwiązują wyzwania algorytmiczne i problemy kodowania'
                ])
            ],
            [
                'id' => 122,
                'parent_id' => 10,
                'slug' => 'design-sprints',
                'name' => 'Design Sprints',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Design Sprints',
                    'de' => 'Design-Sprints',
                    'es' => 'Sprints de Diseño',
                    'pl' => 'Sprinty Projektowe'
                ]),
                'scom' => 'Fast-paced design workshops focused on solving design challenges and creating user-centered solutions',
                'scom_translations' => json_encode([
                    'en' => 'Fast-paced design workshops focused on solving design challenges and creating user-centered solutions',
                    'de' => 'Schnelllebige Design-Workshops mit Fokus auf Lösung von Design-Herausforderungen und Schaffung nutzerzentrierter Lösungen',
                    'es' => 'Talleres de diseño de ritmo rápido enfocados en resolver desafíos de diseño y crear soluciones centradas en el usuario',
                    'pl' => 'Szybkie warsztaty projektowe skoncentrowane na rozwiązywaniu wyzwań projektowych i tworzeniu rozwiązań zorientowanych na użytkownika'
                ])
            ],
            [
                'id' => 123,
                'parent_id' => 10,
                'slug' => 'problem-solving-events',
                'name' => 'Problem-Solving Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Problem-Solving Events',
                    'de' => 'Problemlösungs-Events',
                    'es' => 'Eventos de Resolución de Problemas',
                    'pl' => 'Wydarzenia Rozwiązywania Problemów'
                ]),
                'scom' => 'Collaborative events focused on tackling complex problems using creative and analytical approaches',
                'scom_translations' => json_encode([
                    'en' => 'Collaborative events focused on tackling complex problems using creative and analytical approaches',
                    'de' => 'Kollaborative Veranstaltungen mit Fokus auf Bewältigung komplexer Probleme mit kreativen und analytischen Ansätzen',
                    'es' => 'Eventos colaborativos enfocados en abordar problemas complejos usando enfoques creativos y analíticos',
                    'pl' => 'Wydarzenia współpracy skoncentrowane na rozwiązywaniu złożonych problemów przy użyciu kreatywnych i analitycznych podejść'
                ])
            ],
            [
                'id' => 124,
                'parent_id' => 10,
                'slug' => 'rapid-prototyping-events',
                'name' => 'Rapid Prototyping Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Rapid Prototyping Events',
                    'de' => 'Rapid-Prototyping-Events',
                    'es' => 'Eventos de Prototipado Rápido',
                    'pl' => 'Wydarzenia Szybkiego Prototypowania'
                ]),
                'scom' => 'Events focused on quickly building functional prototypes and minimum viable products',
                'scom_translations' => json_encode([
                    'en' => 'Events focused on quickly building functional prototypes and minimum viable products',
                    'de' => 'Veranstaltungen mit Fokus auf schnellem Aufbau funktionaler Prototypen und minimal funktionsfähiger Produkte',
                    'es' => 'Eventos enfocados en construir rápidamente prototipos funcionales y productos mínimos viables',
                    'pl' => 'Wydarzenia skoncentrowane na szybkim budowaniu funkcjonalnych prototypów i minimalnych produktów wykonalnych'
                ])
            ],
            [
                'id' => 125,
                'parent_id' => 10,
                'slug' => 'creative-workshops',
                'name' => 'Creative Workshops',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Creative Workshops',
                    'de' => 'Kreative Workshops',
                    'es' => 'Talleres Creativos',
                    'pl' => 'Warsztaty Kreatywne'
                ]),
                'scom' => 'Workshops designed to stimulate creativity, innovation, and out-of-the-box thinking',
                'scom_translations' => json_encode([
                    'en' => 'Workshops designed to stimulate creativity, innovation, and out-of-the-box thinking',
                    'de' => 'Workshops zur Stimulierung von Kreativität, Innovation und unkonventionellem Denken',
                    'es' => 'Talleres diseñados para estimular la creatividad, innovación y pensamiento fuera de la caja',
                    'pl' => 'Warsztaty zaprojektowane w celu stymulowania kreatywności, innowacji i myślenia nieszablonowego'
                ])
            ],
            [
                'id' => 126,
                'parent_id' => 10,
                'slug' => 'innovation-labs',
                'name' => 'Innovation Labs',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Innovation Labs',
                    'de' => 'Innovations-Labs',
                    'es' => 'Laboratorios de Innovación',
                    'pl' => 'Laboratoria Innowacji'
                ]),
                'scom' => 'Structured environments for experimenting with new technologies and developing innovative solutions',
                'scom_translations' => json_encode([
                    'en' => 'Structured environments for experimenting with new technologies and developing innovative solutions',
                    'de' => 'Strukturierte Umgebungen zum Experimentieren mit neuen Technologien und Entwickeln innovativer Lösungen',
                    'es' => 'Entornos estructurados para experimentar con nuevas tecnologías y desarrollar soluciones innovadoras',
                    'pl' => 'Strukturalne środowiska do eksperymentowania z nowymi technologiami i rozwijania innowacyjnych rozwiązań'
                ])
            ],
            [
                'id' => 127,
                'parent_id' => 10,
                'slug' => 'maker-events',
                'name' => 'Maker Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Maker Events',
                    'de' => 'Maker-Events',
                    'es' => 'Eventos Maker',
                    'pl' => 'Wydarzenia Maker'
                ]),
                'scom' => 'Hands-on events where participants build, create, and tinker with hardware and software projects',
                'scom_translations' => json_encode([
                    'en' => 'Hands-on events where participants build, create, and tinker with hardware and software projects',
                    'de' => 'Praktische Veranstaltungen, bei denen Teilnehmer Hardware- und Software-Projekte bauen, erstellen und basteln',
                    'es' => 'Eventos prácticos donde los participantes construyen, crean y experimentan con proyectos de hardware y software',
                    'pl' => 'Praktyczne wydarzenia, podczas których uczestnicy budują, tworzą i majsterkują przy projektach sprzętowych i programowych'
                ])
            ],
            [
                'id' => 128,
                'parent_id' => 10,
                'slug' => 'other-hackathons-innovation',
                'name' => 'Other Hackathons & Innovation Events',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Hackathons & Innovation Events',
                    'de' => 'Andere Hackathons und Innovationsveranstaltungen',
                    'es' => 'Otros Hackatones y Eventos de Innovación',
                    'pl' => 'Inne Hackathony i Wydarzenia Innowacyjne'
                ]),
                'scom' => 'Other hackathons and innovation events that do not fit into the above subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Other hackathons and innovation events that do not fit into the above subcategories',
                    'de' => 'Andere Hackathons und Innovationsveranstaltungen, die nicht in die oben genannten Unterkategorien passen',
                    'es' => 'Otros hackatones y eventos de innovación que no encajan en las subcategorías anteriores',
                    'pl' => 'Inne hackathony i wydarzenia innowacyjne, które nie pasują do powyższych podkategorii'
                ])
            ],
            [
                'id' => 129,
                'parent_id' => 11,
                'slug' => 'startup-community-events',
                'name' => 'Startup Community Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Startup Community Events',
                    'de' => 'Startup-Community-Events',
                    'es' => 'Eventos de Comunidad de Startups',
                    'pl' => 'Wydarzenia Społeczności Startupów'
                ]),
                'scom' => 'Events that strengthen bonds within the startup community and foster collaboration',
                'scom_translations' => json_encode([
                    'en' => 'Events that strengthen bonds within the startup community and foster collaboration',
                    'de' => 'Veranstaltungen, die Bindungen innerhalb der Startup-Community stärken und Zusammenarbeit fördern',
                    'es' => 'Eventos que fortalecen los vínculos dentro de la comunidad de startups y fomentan la colaboración',
                    'pl' => 'Wydarzenia, które wzmacniają więzi w społeczności startupów i wspierają współpracę'
                ])
            ],
            [
                'id' => 130,
                'parent_id' => 11,
                'slug' => 'team-building-events',
                'name' => 'Team Building Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Team Building Events',
                    'de' => 'Teambuilding-Events',
                    'es' => 'Eventos de Team Building',
                    'pl' => 'Wydarzenia Team Building'
                ]),
                'scom' => 'Activities designed to improve team cohesion, communication, and collaboration within startups',
                'scom_translations' => json_encode([
                    'en' => 'Activities designed to improve team cohesion, communication, and collaboration within startups',
                    'de' => 'Aktivitäten zur Verbesserung des Teamzusammenhalts, der Kommunikation und Zusammenarbeit in Startups',
                    'es' => 'Actividades diseñadas para mejorar la cohesión del equipo, comunicación y colaboración dentro de startups',
                    'pl' => 'Działania zaprojektowane w celu poprawy spójności zespołu, komunikacji i współpracy w startupach'
                ])
            ],
            [
                'id' => 131,
                'parent_id' => 11,
                'slug' => 'company-culture-workshops',
                'name' => 'Company Culture Workshops',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Company Culture Workshops',
                    'de' => 'Unternehmenskultur-Workshops',
                    'es' => 'Talleres de Cultura Empresarial',
                    'pl' => 'Warsztaty Kultury Firmowej'
                ]),
                'scom' => 'Workshops focused on building strong company culture, values, and workplace environment',
                'scom_translations' => json_encode([
                    'en' => 'Workshops focused on building strong company culture, values, and workplace environment',
                    'de' => 'Workshops mit Fokus auf Aufbau einer starken Unternehmenskultur, Werten und Arbeitsplatzumgebung',
                    'es' => 'Talleres enfocados en construir una cultura empresarial sólida, valores y ambiente de trabajo',
                    'pl' => 'Warsztaty skoncentrowane na budowaniu silnej kultury firmowej, wartości i środowiska pracy'
                ])
            ],
            [
                'id' => 132,
                'parent_id' => 11,
                'slug' => 'diversity-inclusion-events',
                'name' => 'Diversity & Inclusion Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Diversity & Inclusion Events',
                    'de' => 'Diversity & Inclusion Events',
                    'es' => 'Eventos de Diversidad e Inclusión',
                    'pl' => 'Wydarzenia Różnorodności i Inkluzji'
                ]),
                'scom' => 'Events promoting diversity, equity, inclusion, and belonging in the startup ecosystem',
                'scom_translations' => json_encode([
                    'en' => 'Events promoting diversity, equity, inclusion, and belonging in the startup ecosystem',
                    'de' => 'Veranstaltungen zur Förderung von Vielfalt, Gerechtigkeit, Inklusion und Zugehörigkeit im Startup-Ökosystem',
                    'es' => 'Eventos que promueven la diversidad, equidad, inclusión y pertenencia en el ecosistema de startups',
                    'pl' => 'Wydarzenia promujące różnorodność, sprawiedliwość, inkluzję i przynależność w ekosystemie startupów'
                ])
            ],
            [
                'id' => 133,
                'parent_id' => 11,
                'slug' => 'work-life-balance-sessions',
                'name' => 'Work-Life Balance Sessions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Work-Life Balance Sessions',
                    'de' => 'Work-Life-Balance-Sessions',
                    'es' => 'Sesiones de Equilibrio Trabajo-Vida',
                    'pl' => 'Sesje Równowagi Praca-Życie'
                ]),
                'scom' => 'Sessions addressing work-life balance challenges and promoting healthy lifestyle practices',
                'scom_translations' => json_encode([
                    'en' => 'Sessions addressing work-life balance challenges and promoting healthy lifestyle practices',
                    'de' => 'Sessions zu Work-Life-Balance-Herausforderungen und Förderung gesunder Lebensstilpraktiken',
                    'es' => 'Sesiones que abordan desafíos de equilibrio trabajo-vida y promueven prácticas de estilo de vida saludables',
                    'pl' => 'Sesje dotyczące wyzwań równowagi praca-życie i promowania zdrowych praktyk stylu życia'
                ])
            ],
            [
                'id' => 134,
                'parent_id' => 11,
                'slug' => 'mental-health-awareness-events',
                'name' => 'Mental Health Awareness Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Mental Health Awareness Events',
                    'de' => 'Mental Health Awareness Events',
                    'es' => 'Eventos de Concienciación sobre Salud Mental',
                    'pl' => 'Wydarzenia Świadomości Zdrowia Psychicznego'
                ]),
                'scom' => 'Events focused on mental health awareness, support, and resources for entrepreneurs',
                'scom_translations' => json_encode([
                    'en' => 'Events focused on mental health awareness, support, and resources for entrepreneurs',
                    'de' => 'Veranstaltungen mit Fokus auf psychische Gesundheit, Aufklärung, Unterstützung und Ressourcen für Unternehmer',
                    'es' => 'Eventos enfocados en concienciación sobre salud mental, apoyo y recursos para emprendedores',
                    'pl' => 'Wydarzenia skoncentrowane na świadomości zdrowia psychicznego, wsparciu i zasobach dla przedsiębiorców'
                ])
            ],
            [
                'id' => 135,
                'parent_id' => 11,
                'slug' => 'wellness-programs',
                'name' => 'Wellness Programs',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Wellness Programs',
                    'de' => 'Wellness-Programme',
                    'es' => 'Programas de Bienestar',
                    'pl' => 'Programy Wellness'
                ]),
                'scom' => 'Programs promoting physical and mental wellness in the startup environment',
                'scom_translations' => json_encode([
                    'en' => 'Programs promoting physical and mental wellness in the startup environment',
                    'de' => 'Programme zur Förderung des körperlichen und geistigen Wohlbefindens in der Startup-Umgebung',
                    'es' => 'Programas que promueven el bienestar físico y mental en el entorno de startups',
                    'pl' => 'Programy promujące dobre samopoczucie fizyczne i psychiczne w środowisku startupów'
                ])
            ],
            [
                'id' => 136,
                'parent_id' => 11,
                'slug' => 'social-impact-events',
                'name' => 'Social Impact Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Social Impact Events',
                    'de' => 'Social Impact Events',
                    'es' => 'Eventos de Impacto Social',
                    'pl' => 'Wydarzenia Wpływu Społecznego'
                ]),
                'scom' => 'Events focused on creating positive social change and addressing societal challenges',
                'scom_translations' => json_encode([
                    'en' => 'Events focused on creating positive social change and addressing societal challenges',
                    'de' => 'Veranstaltungen mit Fokus auf positive gesellschaftliche Veränderungen und Bewältigung gesellschaftlicher Herausforderungen',
                    'es' => 'Eventos enfocados en crear cambio social positivo y abordar desafíos sociales',
                    'pl' => 'Wydarzenia skoncentrowane na tworzeniu pozytywnych zmian społecznych i radzeniu sobie z wyzwaniami społecznymi'
                ])
            ],
            [
                'id' => 137,
                'parent_id' => 11,
                'slug' => 'sustainability-workshops',
                'name' => 'Sustainability Workshops',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Sustainability Workshops',
                    'de' => 'Nachhaltigkeits-Workshops',
                    'es' => 'Talleres de Sostenibilidad',
                    'pl' => 'Warsztaty Zrównoważonego Rozwoju'
                ]),
                'scom' => 'Workshops promoting sustainable business practices and environmental responsibility',
                'scom_translations' => json_encode([
                    'en' => 'Workshops promoting sustainable business practices and environmental responsibility',
                    'de' => 'Workshops zur Förderung nachhaltiger Geschäftspraktiken und Umweltverantwortung',
                    'es' => 'Talleres que promueven prácticas comerciales sostenibles y responsabilidad ambiental',
                    'pl' => 'Warsztaty promujące zrównoważone praktyki biznesowe i odpowiedzialność środowiskową'
                ])
            ],
            [
                'id' => 138,
                'parent_id' => 11,
                'slug' => 'community-service-events',
                'name' => 'Community Service Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Community Service Events',
                    'de' => 'Community-Service-Events',
                    'es' => 'Eventos de Servicio Comunitario',
                    'pl' => 'Wydarzenia Służby Społecznej'
                ]),
                'scom' => 'Volunteer events where startup communities give back to their local communities',
                'scom_translations' => json_encode([
                    'en' => 'Volunteer events where startup communities give back to their local communities',
                    'de' => 'Freiwilligenveranstaltungen, bei denen Startup-Communities ihren lokalen Gemeinschaften etwas zurückgeben',
                    'es' => 'Eventos voluntarios donde las comunidades de startups retribuyen a sus comunidades locales',
                    'pl' => 'Wydarzenia wolontariackie, podczas których społeczności startupów oddają coś swoim lokalnym społecznościom'
                ])
            ],
            [
                'id' => 139,
                'parent_id' => 11,
                'slug' => 'other-community-culture',
                'name' => 'Other Community & Culture Events',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Community & Culture Events',
                    'de' => 'Andere Gemeinschafts- und Kulturveranstaltungen',
                    'es' => 'Otros Eventos de Comunidad y Cultura',
                    'pl' => 'Inne Wydarzenia Społecznościowe i Kulturalne'
                ]),
                'scom' => 'Other community and culture events that do not fit into the above subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Other community and culture events that do not fit into the above subcategories',
                    'de' => 'Andere Gemeinschafts- und Kulturveranstaltungen, die nicht in die oben genannten Unterkategorien passen',
                    'es' => 'Otros eventos de comunidad y cultura que no encajan en las subcategorías anteriores',
                    'pl' => 'Inne wydarzenia społecznościowe i kulturalne, które nie pasują do powyższych podkategorii'
                ])
            ],
            [
                'id' => 140,
                'parent_id' => 12,
                'slug' => 'sales-training-workshops',
                'name' => 'Sales Training Workshops',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Sales Training Workshops',
                    'de' => 'Verkaufstraining-Workshops',
                    'es' => 'Talleres de Entrenamiento de Ventas',
                    'pl' => 'Warsztaty Szkolenia Sprzedażowego'
                ]),
                'scom' => 'Workshops focused on developing sales skills, techniques, and strategies for startup teams',
                'scom_translations' => json_encode([
                    'en' => 'Workshops focused on developing sales skills, techniques, and strategies for startup teams',
                    'de' => 'Workshops mit Fokus auf Entwicklung von Verkaufsfähigkeiten, -techniken und -strategien für Startup-Teams',
                    'es' => 'Talleres enfocados en desarrollar habilidades, técnicas y estrategias de ventas para equipos de startups',
                    'pl' => 'Warsztaty skoncentrowane na rozwijaniu umiejętności sprzedażowych, technik i strategii dla zespołów startupów'
                ])
            ],
            [
                'id' => 141,
                'parent_id' => 12,
                'slug' => 'marketing-strategy-sessions',
                'name' => 'Marketing Strategy Sessions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Marketing Strategy Sessions',
                    'de' => 'Marketing-Strategie-Sessions',
                    'es' => 'Sesiones de Estrategia de Marketing',
                    'pl' => 'Sesje Strategii Marketingowej'
                ]),
                'scom' => 'Strategic sessions covering marketing planning, positioning, and go-to-market strategies',
                'scom_translations' => json_encode([
                    'en' => 'Strategic sessions covering marketing planning, positioning, and go-to-market strategies',
                    'de' => 'Strategische Sessions zu Marketingplanung, Positionierung und Go-to-Market-Strategien',
                    'es' => 'Sesiones estratégicas que cubren planificación de marketing, posicionamiento y estrategias de go-to-market',
                    'pl' => 'Sesje strategiczne obejmujące planowanie marketingowe, pozycjonowanie i strategie wejścia na rynek'
                ])
            ],
            [
                'id' => 142,
                'parent_id' => 12,
                'slug' => 'growth-hacking-events',
                'name' => 'Growth Hacking Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Growth Hacking Events',
                    'de' => 'Growth-Hacking-Events',
                    'es' => 'Eventos de Growth Hacking',
                    'pl' => 'Wydarzenia Growth Hacking'
                ]),
                'scom' => 'Events focused on rapid growth techniques, user acquisition, and scalable marketing tactics',
                'scom_translations' => json_encode([
                    'en' => 'Events focused on rapid growth techniques, user acquisition, and scalable marketing tactics',
                    'de' => 'Veranstaltungen mit Fokus auf schnelle Wachstumstechniken, Nutzerakquise und skalierbare Marketing-Taktiken',
                    'es' => 'Eventos enfocados en técnicas de crecimiento rápido, adquisición de usuarios y tácticas de marketing escalables',
                    'pl' => 'Wydarzenia skoncentrowane na technikach szybkiego wzrostu, pozyskiwaniu użytkowników i skalowalnych taktykach marketingowych'
                ])
            ],
            [
                'id' => 143,
                'parent_id' => 12,
                'slug' => 'customer-acquisition-workshops',
                'name' => 'Customer Acquisition Workshops',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Customer Acquisition Workshops',
                    'de' => 'Kundenakquise-Workshops',
                    'es' => 'Talleres de Adquisición de Clientes',
                    'pl' => 'Warsztaty Pozyskiwania Klientów'
                ]),
                'scom' => 'Workshops teaching effective methods for acquiring and converting potential customers',
                'scom_translations' => json_encode([
                    'en' => 'Workshops teaching effective methods for acquiring and converting potential customers',
                    'de' => 'Workshops, die effektive Methoden zur Akquise und Konvertierung potenzieller Kunden lehren',
                    'es' => 'Talleres que enseñan métodos efectivos para adquirir y convertir clientes potenciales',
                    'pl' => 'Warsztaty nauczające skutecznych metod pozyskiwania i konwertowania potencjalnych klientów'
                ])
            ],
            [
                'id' => 144,
                'parent_id' => 12,
                'slug' => 'brand-building-events',
                'name' => 'Brand Building Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Brand Building Events',
                    'de' => 'Markenaufbau-Events',
                    'es' => 'Eventos de Construcción de Marca',
                    'pl' => 'Wydarzenia Budowania Marki'
                ]),
                'scom' => 'Events focused on building strong brand identity, messaging, and brand recognition',
                'scom_translations' => json_encode([
                    'en' => 'Events focused on building strong brand identity, messaging, and brand recognition',
                    'de' => 'Veranstaltungen mit Fokus auf Aufbau starker Markenidentität, Messaging und Markenerkennung',
                    'es' => 'Eventos enfocados en construir una identidad de marca sólida, mensajería y reconocimiento de marca',
                    'pl' => 'Wydarzenia skoncentrowane na budowaniu silnej tożsamości marki, komunikacji i rozpoznawalności marki'
                ])
            ],
            [
                'id' => 145,
                'parent_id' => 12,
                'slug' => 'social-media-workshops',
                'name' => 'Social Media Workshops',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Social Media Workshops',
                    'de' => 'Social-Media-Workshops',
                    'es' => 'Talleres de Redes Sociales',
                    'pl' => 'Warsztaty Mediów Społecznościowych'
                ]),
                'scom' => 'Workshops covering social media marketing strategies, content creation, and platform optimization',
                'scom_translations' => json_encode([
                    'en' => 'Workshops covering social media marketing strategies, content creation, and platform optimization',
                    'de' => 'Workshops zu Social-Media-Marketing-Strategien, Content-Erstellung und Plattform-Optimierung',
                    'es' => 'Talleres que cubren estrategias de marketing en redes sociales, creación de contenido y optimización de plataformas',
                    'pl' => 'Warsztaty obejmujące strategie marketingu w mediach społecznościowych, tworzenie treści i optymalizację platform'
                ])
            ],
            [
                'id' => 146,
                'parent_id' => 12,
                'slug' => 'content-marketing-events',
                'name' => 'Content Marketing Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Content Marketing Events',
                    'de' => 'Content-Marketing-Events',
                    'es' => 'Eventos de Marketing de Contenidos',
                    'pl' => 'Wydarzenia Content Marketingu'
                ]),
                'scom' => 'Events focusing on content strategy, storytelling, and content-driven marketing approaches',
                'scom_translations' => json_encode([
                    'en' => 'Events focusing on content strategy, storytelling, and content-driven marketing approaches',
                    'de' => 'Veranstaltungen mit Fokus auf Content-Strategie, Storytelling und content-getriebene Marketing-Ansätze',
                    'es' => 'Eventos enfocados en estrategia de contenido, storytelling y enfoques de marketing basados en contenido',
                    'pl' => 'Wydarzenia skoncentrowane na strategii treści, storytellingu i podejściach marketingowych opartych na treści'
                ])
            ],
            [
                'id' => 147,
                'parent_id' => 12,
                'slug' => 'digital-marketing-seminars',
                'name' => 'Digital Marketing Seminars',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Digital Marketing Seminars',
                    'de' => 'Digital-Marketing-Seminare',
                    'es' => 'Seminarios de Marketing Digital',
                    'pl' => 'Seminaria Marketingu Cyfrowego'
                ]),
                'scom' => 'Seminars covering digital marketing channels, analytics, and online advertising strategies',
                'scom_translations' => json_encode([
                    'en' => 'Seminars covering digital marketing channels, analytics, and online advertising strategies',
                    'de' => 'Seminare zu digitalen Marketing-Kanälen, Analytics und Online-Werbestrategien',
                    'es' => 'Seminarios que cubren canales de marketing digital, analítica y estrategias de publicidad online',
                    'pl' => 'Seminaria obejmujące kanały marketingu cyfrowego, analitykę i strategie reklamy online'
                ])
            ],
            [
                'id' => 148,
                'parent_id' => 12,
                'slug' => 'pr-media-events',
                'name' => 'PR & Media Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'PR & Media Events',
                    'de' => 'PR & Medien-Events',
                    'es' => 'Eventos de PR y Medios',
                    'pl' => 'Wydarzenia PR i Mediów'
                ]),
                'scom' => 'Events focused on public relations, media outreach, and building relationships with journalists',
                'scom_translations' => json_encode([
                    'en' => 'Events focused on public relations, media outreach, and building relationships with journalists',
                    'de' => 'Veranstaltungen mit Fokus auf Public Relations, Medien-Outreach und Beziehungsaufbau zu Journalisten',
                    'es' => 'Eventos enfocados en relaciones públicas, alcance mediático y construcción de relaciones con periodistas',
                    'pl' => 'Wydarzenia skoncentrowane na public relations, kontaktach z mediami i budowaniu relacji z dziennikarzami'
                ])
            ],
            [
                'id' => 149,
                'parent_id' => 12,
                'slug' => 'customer-success-events',
                'name' => 'Customer Success Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Customer Success Events',
                    'de' => 'Customer-Success-Events',
                    'es' => 'Eventos de Éxito del Cliente',
                    'pl' => 'Wydarzenia Sukcesu Klienta'
                ]),
                'scom' => 'Events focusing on customer retention, satisfaction, and long-term relationship building',
                'scom_translations' => json_encode([
                    'en' => 'Events focusing on customer retention, satisfaction, and long-term relationship building',
                    'de' => 'Veranstaltungen mit Fokus auf Kundenbindung, Zufriedenheit und langfristigem Beziehungsaufbau',
                    'es' => 'Eventos enfocados en retención de clientes, satisfacción y construcción de relaciones a largo plazo',
                    'pl' => 'Wydarzenia skoncentrowane na utrzymaniu klientów, satysfakcji i budowaniu długoterminowych relacji'
                ])
            ],
            [
                'id' => 150,
                'parent_id' => 12,
                'slug' => 'other-sales-marketing',
                'name' => 'Other Sales & Marketing Events',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Sales & Marketing Events',
                    'de' => 'Andere Vertriebs- und Marketingveranstaltungen',
                    'es' => 'Otros Eventos de Ventas y Marketing',
                    'pl' => 'Inne Wydarzenia Sprzedażowe i Marketingowe'
                ]),
                'scom' => 'Other sales and marketing events that do not fit into the above subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Other sales and marketing events that do not fit into the above subcategories',
                    'de' => 'Andere Vertriebs- und Marketingveranstaltungen, die nicht in die oben genannten Unterkategorien passen',
                    'es' => 'Otros eventos de ventas y marketing que no encajan en las subcategorías anteriores',
                    'pl' => 'Inne wydarzenia sprzedażowe i marketingowe, które nie pasują do powyższych podkategorii'
                ])
            ],
            [
                'id' => 151,
                'parent_id' => 13,
                'slug' => 'legal-workshops',
                'name' => 'Legal Workshops',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Legal Workshops',
                    'de' => 'Rechts-Workshops',
                    'es' => 'Talleres Legales',
                    'pl' => 'Warsztaty Prawne'
                ]),
                'scom' => 'Educational workshops covering various legal aspects of starting and running a business',
                'scom_translations' => json_encode([
                    'en' => 'Educational workshops covering various legal aspects of starting and running a business',
                    'de' => 'Bildungsworkshops zu verschiedenen rechtlichen Aspekten der Unternehmensgründung und -führung',
                    'es' => 'Talleres educativos que cubren varios aspectos legales de iniciar y dirigir un negocio',
                    'pl' => 'Warsztaty edukacyjne obejmujące różne aspekty prawne założenia i prowadzenia firmy'
                ])
            ],
            [
                'id' => 152,
                'parent_id' => 13,
                'slug' => 'intellectual-property-sessions',
                'name' => 'Intellectual Property Sessions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Intellectual Property Sessions',
                    'de' => 'Geistiges Eigentum Sessions',
                    'es' => 'Sesiones de Propiedad Intelectual',
                    'pl' => 'Sesje Własności Intelektualnej'
                ]),
                'scom' => 'Sessions focused on protecting intellectual property, patents, trademarks, and copyrights',
                'scom_translations' => json_encode([
                    'en' => 'Sessions focused on protecting intellectual property, patents, trademarks, and copyrights',
                    'de' => 'Sessions mit Fokus auf Schutz von geistigem Eigentum, Patenten, Marken und Urheberrechten',
                    'es' => 'Sesiones enfocadas en proteger la propiedad intelectual, patentes, marcas registradas y derechos de autor',
                    'pl' => 'Sesje skoncentrowane na ochronie własności intelektualnej, patentów, znaków towarowych i praw autorskich'
                ])
            ],
            [
                'id' => 153,
                'parent_id' => 13,
                'slug' => 'contract-law-seminars',
                'name' => 'Contract Law Seminars',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Contract Law Seminars',
                    'de' => 'Vertragsrecht-Seminare',
                    'es' => 'Seminarios de Derecho Contractual',
                    'pl' => 'Seminaria Prawa Umów'
                ]),
                'scom' => 'Seminars covering contract negotiations, terms, and legal implications for startups',
                'scom_translations' => json_encode([
                    'en' => 'Seminars covering contract negotiations, terms, and legal implications for startups',
                    'de' => 'Seminare zu Vertragsverhandlungen, -bedingungen und rechtlichen Auswirkungen für Startups',
                    'es' => 'Seminarios que cubren negociaciones contractuales, términos e implicaciones legales para startups',
                    'pl' => 'Seminaria obejmujące negocjacje umów, warunki i implikacje prawne dla startupów'
                ])
            ],
            [
                'id' => 154,
                'parent_id' => 13,
                'slug' => 'employment-law-updates',
                'name' => 'Employment Law Updates',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Employment Law Updates',
                    'de' => 'Arbeitsrecht-Updates',
                    'es' => 'Actualizaciones de Derecho Laboral',
                    'pl' => 'Aktualizacje Prawa Pracy'
                ]),
                'scom' => 'Sessions providing updates on employment law changes, hiring practices, and workplace regulations',
                'scom_translations' => json_encode([
                    'en' => 'Sessions providing updates on employment law changes, hiring practices, and workplace regulations',
                    'de' => 'Sessions mit Updates zu Arbeitsrechtsänderungen, Einstellungspraktiken und Arbeitsplatzvorschriften',
                    'es' => 'Sesiones que proporcionan actualizaciones sobre cambios en derecho laboral, prácticas de contratación y regulaciones laborales',
                    'pl' => 'Sesje dostarczające aktualizacji na temat zmian w prawie pracy, praktyk zatrudniania i regulacji miejsca pracy'
                ])
            ],
            [
                'id' => 155,
                'parent_id' => 13,
                'slug' => 'data-privacy-workshops',
                'name' => 'Data Privacy Workshops',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Data Privacy Workshops',
                    'de' => 'Datenschutz-Workshops',
                    'es' => 'Talleres de Privacidad de Datos',
                    'pl' => 'Warsztaty Prywatności Danych'
                ]),
                'scom' => 'Workshops on data protection regulations, GDPR compliance, and privacy best practices',
                'scom_translations' => json_encode([
                    'en' => 'Workshops on data protection regulations, GDPR compliance, and privacy best practices',
                    'de' => 'Workshops zu Datenschutzbestimmungen, DSGVO-Compliance und Datenschutz-Best-Practices',
                    'es' => 'Talleres sobre regulaciones de protección de datos, cumplimiento GDPR y mejores prácticas de privacidad',
                    'pl' => 'Warsztaty na temat regulacji ochrony danych, zgodności z RODO i najlepszych praktyk prywatności'
                ])
            ],
            [
                'id' => 156,
                'parent_id' => 13,
                'slug' => 'regulatory-compliance-events',
                'name' => 'Regulatory Compliance Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Regulatory Compliance Events',
                    'de' => 'Regulatorische Compliance-Events',
                    'es' => 'Eventos de Cumplimiento Regulatorio',
                    'pl' => 'Wydarzenia Zgodności Regulacyjnej'
                ]),
                'scom' => 'Events covering industry-specific regulations and compliance requirements for startups',
                'scom_translations' => json_encode([
                    'en' => 'Events covering industry-specific regulations and compliance requirements for startups',
                    'de' => 'Veranstaltungen zu branchenspezifischen Vorschriften und Compliance-Anforderungen für Startups',
                    'es' => 'Eventos que cubren regulaciones específicas de la industria y requisitos de cumplimiento para startups',
                    'pl' => 'Wydarzenia obejmujące branżowe regulacje i wymagania zgodności dla startupów'
                ])
            ],
            [
                'id' => 157,
                'parent_id' => 13,
                'slug' => 'tax-planning-sessions',
                'name' => 'Tax Planning Sessions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Tax Planning Sessions',
                    'de' => 'Steuerplanungs-Sessions',
                    'es' => 'Sesiones de Planificación Fiscal',
                    'pl' => 'Sesje Planowania Podatkowego'
                ]),
                'scom' => 'Sessions focused on tax strategies, obligations, and planning for startup businesses',
                'scom_translations' => json_encode([
                    'en' => 'Sessions focused on tax strategies, obligations, and planning for startup businesses',
                    'de' => 'Sessions mit Fokus auf Steuerstrategien, -verpflichtungen und -planung für Startup-Unternehmen',
                    'es' => 'Sesiones enfocadas en estrategias fiscales, obligaciones y planificación para empresas startup',
                    'pl' => 'Sesje skoncentrowane na strategiach podatkowych, obowiązkach i planowaniu dla firm startupowych'
                ])
            ],
            [
                'id' => 158,
                'parent_id' => 13,
                'slug' => 'corporate-governance-events',
                'name' => 'Corporate Governance Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Corporate Governance Events',
                    'de' => 'Corporate-Governance-Events',
                    'es' => 'Eventos de Gobierno Corporativo',
                    'pl' => 'Wydarzenia Ładu Korporacyjnego'
                ]),
                'scom' => 'Events covering board governance, shareholder rights, and corporate structure best practices',
                'scom_translations' => json_encode([
                    'en' => 'Events covering board governance, shareholder rights, and corporate structure best practices',
                    'de' => 'Veranstaltungen zu Vorstandsführung, Aktionärsrechten und Best Practices der Unternehmensstruktur',
                    'es' => 'Eventos que cubren gobierno de juntas directivas, derechos de accionistas y mejores prácticas de estructura corporativa',
                    'pl' => 'Wydarzenia obejmujące zarządzanie radą, prawa akcjonariuszy i najlepsze praktyki struktury korporacyjnej'
                ])
            ],
            [
                'id' => 159,
                'parent_id' => 13,
                'slug' => 'international-law-seminars',
                'name' => 'International Law Seminars',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'International Law Seminars',
                    'de' => 'Internationales Recht Seminare',
                    'es' => 'Seminarios de Derecho Internacional',
                    'pl' => 'Seminaria Prawa Międzynarodowego'
                ]),
                'scom' => 'Seminars on international business law, cross-border transactions, and global expansion legal issues',
                'scom_translations' => json_encode([
                    'en' => 'Seminars on international business law, cross-border transactions, and global expansion legal issues',
                    'de' => 'Seminare zu internationalem Wirtschaftsrecht, grenzüberschreitenden Transaktionen und rechtlichen Fragen der globalen Expansion',
                    'es' => 'Seminarios sobre derecho comercial internacional, transacciones transfronterizas y asuntos legales de expansión global',
                    'pl' => 'Seminaria na temat międzynarodowego prawa biznesowego, transakcji transgranicznych i kwestii prawnych globalnej ekspansji'
                ])
            ],
            [
                'id' => 160,
                'parent_id' => 13,
                'slug' => 'startup-legal-clinics',
                'name' => 'Startup Legal Clinics',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Startup Legal Clinics',
                    'de' => 'Startup-Rechtskliniken',
                    'es' => 'Clínicas Legales para Startups',
                    'pl' => 'Kliniki Prawne dla Startupów'
                ]),
                'scom' => 'Free or low-cost legal consultation sessions specifically designed for startup founders',
                'scom_translations' => json_encode([
                    'en' => 'Free or low-cost legal consultation sessions specifically designed for startup founders',
                    'de' => 'Kostenlose oder kostengünstige Rechtsberatungssessions speziell für Startup-Gründer',
                    'es' => 'Sesiones de consulta legal gratuitas o de bajo costo específicamente diseñadas para fundadores de startups',
                    'pl' => 'Bezpłatne lub niskokosztowe sesje konsultacji prawnych specjalnie zaprojektowane dla założycieli startupów'
                ])
            ],
            [
                'id' => 161,
                'parent_id' => 13,
                'slug' => 'other-legal-compliance',
                'name' => 'Other Legal & Compliance Events',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Legal & Compliance Events',
                    'de' => 'Andere Rechts- und Compliance-Veranstaltungen',
                    'es' => 'Otros Eventos Legales y de Cumplimiento',
                    'pl' => 'Inne Wydarzenia Prawne i Zgodności'
                ]),
                'scom' => 'Other legal and compliance events that do not fit into the above subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Other legal and compliance events that do not fit into the above subcategories',
                    'de' => 'Andere Rechts- und Compliance-Veranstaltungen, die nicht in die oben genannten Unterkategorien passen',
                    'es' => 'Otros eventos legales y de cumplimiento que no encajan en las subcategorías anteriores',
                    'pl' => 'Inne wydarzenia prawne i zgodności, które nie pasują do powyższych podkategorii'
                ])
            ],
            [
                'id' => 162,
                'parent_id' => 14,
                'slug' => 'city-startup-events',
                'name' => 'City Startup Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'City Startup Events',
                    'de' => 'Stadt-Startup-Events',
                    'es' => 'Eventos de Startups de la Ciudad',
                    'pl' => 'Wydarzenia Startupowe Miasta'
                ]),
                'scom' => 'Startup events organized within specific cities to foster local entrepreneurial communities',
                'scom_translations' => json_encode([
                    'en' => 'Startup events organized within specific cities to foster local entrepreneurial communities',
                    'de' => 'Startup-Veranstaltungen in bestimmten Städten zur Förderung lokaler Unternehmergemeinschaften',
                    'es' => 'Eventos de startups organizados dentro de ciudades específicas para fomentar comunidades empresariales locales',
                    'pl' => 'Wydarzenia startupowe organizowane w konkretnych miastach w celu wspierania lokalnych społeczności przedsiębiorczych'
                ])
            ],
            [
                'id' => 163,
                'parent_id' => 14,
                'slug' => 'regional-entrepreneurship-events',
                'name' => 'Regional Entrepreneurship Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Regional Entrepreneurship Events',
                    'de' => 'Regionale Unternehmertum-Events',
                    'es' => 'Eventos Regionales de Emprendimiento',
                    'pl' => 'Regionalne Wydarzenia Przedsiębiorczości'
                ]),
                'scom' => 'Events covering broader regional areas to connect entrepreneurs across multiple locations',
                'scom_translations' => json_encode([
                    'en' => 'Events covering broader regional areas to connect entrepreneurs across multiple locations',
                    'de' => 'Veranstaltungen für breitere regionale Gebiete zur Vernetzung von Unternehmern an mehreren Standorten',
                    'es' => 'Eventos que cubren áreas regionales más amplias para conectar emprendedores en múltiples ubicaciones',
                    'pl' => 'Wydarzenia obejmujące szersze obszary regionalne w celu łączenia przedsiębiorców z wielu lokalizacji'
                ])
            ],
            [
                'id' => 164,
                'parent_id' => 14,
                'slug' => 'local-business-events',
                'name' => 'Local Business Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Local Business Events',
                    'de' => 'Lokale Business-Events',
                    'es' => 'Eventos de Negocios Locales',
                    'pl' => 'Lokalne Wydarzenia Biznesowe'
                ]),
                'scom' => 'Events focused on local business development, community engagement, and neighborhood networking',
                'scom_translations' => json_encode([
                    'en' => 'Events focused on local business development, community engagement, and neighborhood networking',
                    'de' => 'Veranstaltungen mit Fokus auf lokale Geschäftsentwicklung, Community-Engagement und Nachbarschafts-Networking',
                    'es' => 'Eventos enfocados en desarrollo de negocios locales, compromiso comunitario y networking vecinal',
                    'pl' => 'Wydarzenia skoncentrowane na lokalnym rozwoju biznesu, zaangażowaniu społeczności i networkingu sąsiedzkim'
                ])
            ],
            [
                'id' => 165,
                'parent_id' => 14,
                'slug' => 'chamber-of-commerce-events',
                'name' => 'Chamber of Commerce Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Chamber of Commerce Events',
                    'de' => 'Handelskammer-Events',
                    'es' => 'Eventos de Cámara de Comercio',
                    'pl' => 'Wydarzenia Izby Handlowej'
                ]),
                'scom' => 'Business events organized by local chambers of commerce to support regional business growth',
                'scom_translations' => json_encode([
                    'en' => 'Business events organized by local chambers of commerce to support regional business growth',
                    'de' => 'Geschäftsveranstaltungen der örtlichen Handelskammern zur Unterstützung des regionalen Geschäftswachstums',
                    'es' => 'Eventos empresariales organizados por cámaras de comercio locales para apoyar el crecimiento empresarial regional',
                    'pl' => 'Wydarzenia biznesowe organizowane przez lokalne izby handlowe w celu wspierania regionalnego wzrostu biznesu'
                ])
            ],
            [
                'id' => 166,
                'parent_id' => 14,
                'slug' => 'economic-development-events',
                'name' => 'Economic Development Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Economic Development Events',
                    'de' => 'Wirtschaftsentwicklungs-Events',
                    'es' => 'Eventos de Desarrollo Económico',
                    'pl' => 'Wydarzenia Rozwoju Gospodarczego'
                ]),
                'scom' => 'Events promoting economic development, investment opportunities, and regional growth initiatives',
                'scom_translations' => json_encode([
                    'en' => 'Events promoting economic development, investment opportunities, and regional growth initiatives',
                    'de' => 'Veranstaltungen zur Förderung der Wirtschaftsentwicklung, Investitionsmöglichkeiten und regionaler Wachstumsinitiativen',
                    'es' => 'Eventos que promueven el desarrollo económico, oportunidades de inversión e iniciativas de crecimiento regional',
                    'pl' => 'Wydarzenia promujące rozwój gospodarczy, możliwości inwestycyjne i regionalne inicjatywy wzrostu'
                ])
            ],
            [
                'id' => 167,
                'parent_id' => 14,
                'slug' => 'international-trade-events',
                'name' => 'International Trade Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'International Trade Events',
                    'de' => 'Internationale Handels-Events',
                    'es' => 'Eventos de Comercio Internacional',
                    'pl' => 'Wydarzenia Handlu Międzynarodowego'
                ]),
                'scom' => 'Events facilitating international business connections and cross-border trade opportunities',
                'scom_translations' => json_encode([
                    'en' => 'Events facilitating international business connections and cross-border trade opportunities',
                    'de' => 'Veranstaltungen zur Förderung internationaler Geschäftsverbindungen und grenzüberschreitender Handelsmöglichkeiten',
                    'es' => 'Eventos que facilitan conexiones empresariales internacionales y oportunidades de comercio transfronterizo',
                    'pl' => 'Wydarzenia ułatwiające międzynarodowe połączenia biznesowe i możliwości handlu transgranicznego'
                ])
            ],
            [
                'id' => 168,
                'parent_id' => 14,
                'slug' => 'cross-border-business-events',
                'name' => 'Cross-Border Business Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Cross-Border Business Events',
                    'de' => 'Grenzüberschreitende Business-Events',
                    'es' => 'Eventos de Negocios Transfronterizos',
                    'pl' => 'Wydarzenia Biznesowe Transgraniczne'
                ]),
                'scom' => 'Events connecting businesses and entrepreneurs across national borders and regions',
                'scom_translations' => json_encode([
                    'en' => 'Events connecting businesses and entrepreneurs across national borders and regions',
                    'de' => 'Veranstaltungen zur Vernetzung von Unternehmen und Unternehmern über nationale Grenzen und Regionen hinweg',
                    'es' => 'Eventos que conectan empresas y emprendedores a través de fronteras nacionales y regiones',
                    'pl' => 'Wydarzenia łączące firmy i przedsiębiorców przez granice narodowe i regiony'
                ])
            ],
            [
                'id' => 169,
                'parent_id' => 14,
                'slug' => 'emerging-market-events',
                'name' => 'Emerging Market Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Emerging Market Events',
                    'de' => 'Schwellenmarkt-Events',
                    'es' => 'Eventos de Mercados Emergentes',
                    'pl' => 'Wydarzenia Rynków Wschodzących'
                ]),
                'scom' => 'Events focused on business opportunities and entrepreneurship in emerging markets',
                'scom_translations' => json_encode([
                    'en' => 'Events focused on business opportunities and entrepreneurship in emerging markets',
                    'de' => 'Veranstaltungen mit Fokus auf Geschäftsmöglichkeiten und Unternehmertum in Schwellenmärkten',
                    'es' => 'Eventos enfocados en oportunidades de negocio y emprendimiento en mercados emergentes',
                    'pl' => 'Wydarzenia skoncentrowane na możliwościach biznesowych i przedsiębiorczości na rynkach wschodzących'
                ])
            ],
            [
                'id' => 170,
                'parent_id' => 14,
                'slug' => 'global-expansion-workshops',
                'name' => 'Global Expansion Workshops',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Global Expansion Workshops',
                    'de' => 'Globale Expansions-Workshops',
                    'es' => 'Talleres de Expansión Global',
                    'pl' => 'Warsztaty Globalnej Ekspansji'
                ]),
                'scom' => 'Workshops providing guidance on international expansion strategies and global market entry',
                'scom_translations' => json_encode([
                    'en' => 'Workshops providing guidance on international expansion strategies and global market entry',
                    'de' => 'Workshops mit Anleitung zu internationalen Expansionsstrategien und globalem Markteintritt',
                    'es' => 'Talleres que proporcionan orientación sobre estrategias de expansión internacional y entrada al mercado global',
                    'pl' => 'Warsztaty dostarczające wskazówek dotyczących strategii ekspansji międzynarodowej i wejścia na rynek globalny'
                ])
            ],
            [
                'id' => 171,
                'parent_id' => 14,
                'slug' => 'cultural-exchange-events',
                'name' => 'Cultural Exchange Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Cultural Exchange Events',
                    'de' => 'Kultureller Austausch Events',
                    'es' => 'Eventos de Intercambio Cultural',
                    'pl' => 'Wydarzenia Wymiany Kulturowej'
                ]),
                'scom' => 'Events promoting cultural understanding and international collaboration in business',
                'scom_translations' => json_encode([
                    'en' => 'Events promoting cultural understanding and international collaboration in business',
                    'de' => 'Veranstaltungen zur Förderung kulturellen Verständnisses und internationaler Zusammenarbeit im Geschäftsleben',
                    'es' => 'Eventos que promueven el entendimiento cultural y la colaboración internacional en los negocios',
                    'pl' => 'Wydarzenia promujące zrozumienie kulturowe i międzynarodową współpracę w biznesie'
                ])
            ],
            [
                'id' => 172,
                'parent_id' => 14,
                'slug' => 'other-regional-location',
                'name' => 'Other Regional & Location-Based Events',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Regional & Location-Based Events',
                    'de' => 'Andere regionale und standortbasierte Veranstaltungen',
                    'es' => 'Otros Eventos Regionales y Basados en Ubicación',
                    'pl' => 'Inne Wydarzenia Regionalne i Lokalizacyjne'
                ]),
                'scom' => 'Other regional and location-based events that do not fit into the above subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Other regional and location-based events that do not fit into the above subcategories',
                    'de' => 'Andere regionale und standortbasierte Veranstaltungen, die nicht in die oben genannten Unterkategorien passen',
                    'es' => 'Otros eventos regionales y basados en ubicación que no encajan en las subcategorías anteriores',
                    'pl' => 'Inne wydarzenia regionalne i lokalizacyjne, które nie pasują do powyższych podkategorii'
                ])
            ],
            [
                'id' => 173,
                'parent_id' => 15,
                'slug' => 'startup-awards-ceremonies',
                'name' => 'Startup Awards Ceremonies',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Startup Awards Ceremonies',
                    'de' => 'Startup-Awards-Zeremonien',
                    'es' => 'Ceremonias de Premios de Startups',
                    'pl' => 'Ceremonie Nagród Startupów'
                ]),
                'scom' => 'Formal ceremonies recognizing outstanding startups and their contributions to the ecosystem',
                'scom_translations' => json_encode([
                    'en' => 'Formal ceremonies recognizing outstanding startups and their contributions to the ecosystem',
                    'de' => 'Formelle Zeremonien zur Anerkennung herausragender Startups und ihrer Beiträge zum Ökosystem',
                    'es' => 'Ceremonias formales que reconocen startups destacadas y sus contribuciones al ecosistema',
                    'pl' => 'Formalne ceremonie uznające wybitne startupy i ich wkład w ekosystem'
                ])
            ],
            [
                'id' => 174,
                'parent_id' => 15,
                'slug' => 'innovation-awards',
                'name' => 'Innovation Awards',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Innovation Awards',
                    'de' => 'Innovations-Awards',
                    'es' => 'Premios de Innovación',
                    'pl' => 'Nagrody Innowacji'
                ]),
                'scom' => 'Awards celebrating breakthrough innovations, technological advancements, and creative solutions',
                'scom_translations' => json_encode([
                    'en' => 'Awards celebrating breakthrough innovations, technological advancements, and creative solutions',
                    'de' => 'Awards zur Feier bahnbrechender Innovationen, technologischer Fortschritte und kreativer Lösungen',
                    'es' => 'Premios celebrando innovaciones revolucionarias, avances tecnológicos y soluciones creativas',
                    'pl' => 'Nagrody celebrujące przełomowe innowacje, postępy technologiczne i kreatywne rozwiązania'
                ])
            ],
            [
                'id' => 175,
                'parent_id' => 15,
                'slug' => 'industry-recognition-events',
                'name' => 'Industry Recognition Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Industry Recognition Events',
                    'de' => 'Branchen-Anerkennungsveranstaltungen',
                    'es' => 'Eventos de Reconocimiento de la Industria',
                    'pl' => 'Wydarzenia Uznania Branżowego'
                ]),
                'scom' => 'Events recognizing excellence and leadership within specific industries and sectors',
                'scom_translations' => json_encode([
                    'en' => 'Events recognizing excellence and leadership within specific industries and sectors',
                    'de' => 'Veranstaltungen zur Anerkennung von Exzellenz und Führung in bestimmten Branchen und Sektoren',
                    'es' => 'Eventos que reconocen la excelencia y liderazgo dentro de industrias y sectores específicos',
                    'pl' => 'Wydarzenia uznające doskonałość i przywództwo w konkretnych branżach i sektorach'
                ])
            ],
            [
                'id' => 176,
                'parent_id' => 15,
                'slug' => 'achievement-celebrations',
                'name' => 'Achievement Celebrations',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Achievement Celebrations',
                    'de' => 'Leistungsfeierlichkeiten',
                    'es' => 'Celebraciones de Logros',
                    'pl' => 'Celebracje Osiągnięć'
                ]),
                'scom' => 'Celebratory events honoring significant milestones and achievements in the startup journey',
                'scom_translations' => json_encode([
                    'en' => 'Celebratory events honoring significant milestones and achievements in the startup journey',
                    'de' => 'Feierliche Veranstaltungen zu Ehren bedeutender Meilensteine und Erfolge in der Startup-Reise',
                    'es' => 'Eventos celebratorios honrando hitos significativos y logros en el viaje de startups',
                    'pl' => 'Wydarzenia celebracyjne honorujące znaczące kamienie milowe i osiągnięcia w podróży startupowej'
                ])
            ],
            [
                'id' => 177,
                'parent_id' => 15,
                'slug' => 'success-story-events',
                'name' => 'Success Story Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Success Story Events',
                    'de' => 'Erfolgsgeschichten-Events',
                    'es' => 'Eventos de Historias de Éxito',
                    'pl' => 'Wydarzenia Historii Sukcesu'
                ]),
                'scom' => 'Events showcasing and celebrating inspiring success stories from the entrepreneurial community',
                'scom_translations' => json_encode([
                    'en' => 'Events showcasing and celebrating inspiring success stories from the entrepreneurial community',
                    'de' => 'Veranstaltungen zur Präsentation und Feier inspirierender Erfolgsgeschichten aus der Unternehmergemeinschaft',
                    'es' => 'Eventos que muestran y celebran historias de éxito inspiradoras de la comunidad empresarial',
                    'pl' => 'Wydarzenia prezentujące i celebrujące inspirujące historie sukcesu ze społeczności przedsiębiorczej'
                ])
            ],
            [
                'id' => 178,
                'parent_id' => 15,
                'slug' => 'hall-of-fame-inductions',
                'name' => 'Hall of Fame Inductions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Hall of Fame Inductions',
                    'de' => 'Hall-of-Fame-Aufnahmen',
                    'es' => 'Inducciones al Salón de la Fama',
                    'pl' => 'Wprowadzenia do Galerii Sław'
                ]),
                'scom' => 'Prestigious ceremonies inducting exceptional entrepreneurs and innovators into halls of fame',
                'scom_translations' => json_encode([
                    'en' => 'Prestigious ceremonies inducting exceptional entrepreneurs and innovators into halls of fame',
                    'de' => 'Prestigeträchtige Zeremonien zur Aufnahme außergewöhnlicher Unternehmer und Innovatoren in Ruhmeshallen',
                    'es' => 'Ceremonias prestigiosas que inducen empresarios e innovadores excepcionales en salones de la fama',
                    'pl' => 'Prestiżowe ceremonie wprowadzające wyjątkowych przedsiębiorców i innowatorów do galerii sław'
                ])
            ],
            [
                'id' => 179,
                'parent_id' => 15,
                'slug' => 'best-practices-showcases',
                'name' => 'Best Practices Showcases',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Best Practices Showcases',
                    'de' => 'Best-Practices-Showcases',
                    'es' => 'Escaparates de Mejores Prácticas',
                    'pl' => 'Pokazy Najlepszych Praktyk'
                ]),
                'scom' => 'Events highlighting and recognizing exemplary business practices and methodologies',
                'scom_translations' => json_encode([
                    'en' => 'Events highlighting and recognizing exemplary business practices and methodologies',
                    'de' => 'Veranstaltungen zur Hervorhebung und Anerkennung vorbildlicher Geschäftspraktiken und Methoden',
                    'es' => 'Eventos que destacan y reconocen prácticas comerciales y metodologías ejemplares',
                    'pl' => 'Wydarzenia podkreślające i uznające wzorcowe praktyki biznesowe i metodologie'
                ])
            ],
            [
                'id' => 180,
                'parent_id' => 15,
                'slug' => 'excellence-awards',
                'name' => 'Excellence Awards',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Excellence Awards',
                    'de' => 'Exzellenz-Awards',
                    'es' => 'Premios de Excelencia',
                    'pl' => 'Nagrody Doskonałości'
                ]),
                'scom' => 'Awards recognizing exceptional performance, quality, and excellence in various business areas',
                'scom_translations' => json_encode([
                    'en' => 'Awards recognizing exceptional performance, quality, and excellence in various business areas',
                    'de' => 'Awards zur Anerkennung außergewöhnlicher Leistung, Qualität und Exzellenz in verschiedenen Geschäftsbereichen',
                    'es' => 'Premios que reconocen rendimiento excepcional, calidad y excelencia en varias áreas de negocio',
                    'pl' => 'Nagrody uznające wyjątkową wydajność, jakość i doskonałość w różnych obszarach biznesowych'
                ])
            ],
            [
                'id' => 181,
                'parent_id' => 15,
                'slug' => 'impact-awards',
                'name' => 'Impact Awards',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Impact Awards',
                    'de' => 'Impact-Awards',
                    'es' => 'Premios de Impacto',
                    'pl' => 'Nagrody Wpływu'
                ]),
                'scom' => 'Awards recognizing businesses and initiatives that create significant positive social or environmental impact',
                'scom_translations' => json_encode([
                    'en' => 'Awards recognizing businesses and initiatives that create significant positive social or environmental impact',
                    'de' => 'Awards zur Anerkennung von Unternehmen und Initiativen mit bedeutendem positiven sozialen oder Umwelteinfluss',
                    'es' => 'Premios que reconocen empresas e iniciativas que crean un impacto social o ambiental positivo significativo',
                    'pl' => 'Nagrody uznające firmy i inicjatywy tworzące znaczący pozytywny wpływ społeczny lub środowiskowy'
                ])
            ],
            [
                'id' => 182,
                'parent_id' => 15,
                'slug' => 'lifetime-achievement-events',
                'name' => 'Lifetime Achievement Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Lifetime Achievement Events',
                    'de' => 'Lebenswerk-Events',
                    'es' => 'Eventos de Logros de Toda la Vida',
                    'pl' => 'Wydarzenia Osiągnięć Życia'
                ]),
                'scom' => 'Special events honoring individuals for their lifetime contributions to entrepreneurship and innovation',
                'scom_translations' => json_encode([
                    'en' => 'Special events honoring individuals for their lifetime contributions to entrepreneurship and innovation',
                    'de' => 'Besondere Veranstaltungen zu Ehren von Personen für ihre lebenslangen Beiträge zu Unternehmertum und Innovation',
                    'es' => 'Eventos especiales honrando individuos por sus contribuciones de toda la vida al emprendimiento e innovación',
                    'pl' => 'Specjalne wydarzenia honorujące osoby za ich życiowy wkład w przedsiębiorczość i innowacje'
                ])
            ],
            [
                'id' => 183,
                'parent_id' => 15,
                'slug' => 'other-awards-recognition',
                'name' => 'Other Awards & Recognition Events',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Awards & Recognition Events',
                    'de' => 'Andere Auszeichnungs- und Anerkennungsveranstaltungen',
                    'es' => 'Otros Eventos de Premios y Reconocimiento',
                    'pl' => 'Inne Wydarzenia Nagród i Uznania'
                ]),
                'scom' => 'Other awards and recognition events that do not fit into the above subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Other awards and recognition events that do not fit into the above subcategories',
                    'de' => 'Andere Auszeichnungs- und Anerkennungsveranstaltungen, die nicht in die oben genannten Unterkategorien passen',
                    'es' => 'Otros eventos de premios y reconocimiento que no encajan en las subcategorías anteriores',
                    'pl' => 'Inne wydarzenia nagród i uznania, które nie pasują do powyższych podkategorii'
                ])
            ],
            [
                'id' => 184,
                'parent_id' => 16,
                'slug' => 'women-entrepreneurs-events',
                'name' => 'Women Entrepreneurs Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Women Entrepreneurs Events',
                    'de' => 'Frauen-Unternehmerinnen-Events',
                    'es' => 'Eventos de Mujeres Emprendedoras',
                    'pl' => 'Wydarzenia Kobiet Przedsiębiorczyń'
                ]),
                'scom' => 'Events specifically designed to support, empower, and connect women entrepreneurs',
                'scom_translations' => json_encode([
                    'en' => 'Events specifically designed to support, empower, and connect women entrepreneurs',
                    'de' => 'Veranstaltungen speziell zur Unterstützung, Stärkung und Vernetzung von Unternehmerinnen',
                    'es' => 'Eventos específicamente diseñados para apoyar, empoderar y conectar mujeres emprendedoras',
                    'pl' => 'Wydarzenia specjalnie zaprojektowane w celu wspierania, wzmacniania i łączenia kobiet przedsiębiorczyń'
                ])
            ],
            [
                'id' => 185,
                'parent_id' => 16,
                'slug' => 'minority-owned-business-events',
                'name' => 'Minority-Owned Business Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Minority-Owned Business Events',
                    'de' => 'Minderheitenunternehmen-Events',
                    'es' => 'Eventos de Empresas de Minorías',
                    'pl' => 'Wydarzenia Firm Należących do Mniejszości'
                ]),
                'scom' => 'Events supporting businesses owned by racial, ethnic, and cultural minorities',
                'scom_translations' => json_encode([
                    'en' => 'Events supporting businesses owned by racial, ethnic, and cultural minorities',
                    'de' => 'Veranstaltungen zur Unterstützung von Unternehmen im Besitz von rassischen, ethnischen und kulturellen Minderheiten',
                    'es' => 'Eventos que apoyan empresas propiedad de minorías raciales, étnicas y culturales',
                    'pl' => 'Wydarzenia wspierające firmy należące do mniejszości rasowych, etnicznych i kulturowych'
                ])
            ],
            [
                'id' => 186,
                'parent_id' => 16,
                'slug' => 'student-entrepreneur-events',
                'name' => 'Student Entrepreneur Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Student Entrepreneur Events',
                    'de' => 'Studenten-Unternehmer-Events',
                    'es' => 'Eventos de Estudiantes Emprendedores',
                    'pl' => 'Wydarzenia Studenckich Przedsiębiorców'
                ]),
                'scom' => 'Events tailored for student entrepreneurs and young founders in educational settings',
                'scom_translations' => json_encode([
                    'en' => 'Events tailored for student entrepreneurs and young founders in educational settings',
                    'de' => 'Veranstaltungen für Studenten-Unternehmer und junge Gründer in Bildungseinrichtungen',
                    'es' => 'Eventos diseñados para estudiantes emprendedores y jóvenes fundadores en entornos educativos',
                    'pl' => 'Wydarzenia dostosowane do studenckich przedsiębiorców i młodych założycieli w środowiskach edukacyjnych'
                ])
            ],
            [
                'id' => 187,
                'parent_id' => 16,
                'slug' => 'senior-entrepreneur-programs',
                'name' => 'Senior Entrepreneur Programs',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Senior Entrepreneur Programs',
                    'de' => 'Senior-Unternehmer-Programme',
                    'es' => 'Programas de Emprendedores Senior',
                    'pl' => 'Programy Seniorów Przedsiębiorców'
                ]),
                'scom' => 'Programs and events designed for entrepreneurs aged 50+ and second-career founders',
                'scom_translations' => json_encode([
                    'en' => 'Programs and events designed for entrepreneurs aged 50+ and second-career founders',
                    'de' => 'Programme und Veranstaltungen für Unternehmer ab 50 Jahren und Zweitkarriere-Gründer',
                    'es' => 'Programas y eventos diseñados para emprendedores de 50+ años y fundadores de segunda carrera',
                    'pl' => 'Programy i wydarzenia zaprojektowane dla przedsiębiorców w wieku 50+ i założycieli drugiej kariery'
                ])
            ],
            [
                'id' => 188,
                'parent_id' => 16,
                'slug' => 'social-impact-startup-events',
                'name' => 'Social Impact Startup Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Social Impact Startup Events',
                    'de' => 'Social Impact Startup Events',
                    'es' => 'Eventos de Startups de Impacto Social',
                    'pl' => 'Wydarzenia Startupów Wpływu Społecznego'
                ]),
                'scom' => 'Events focused on startups and businesses creating positive social and environmental change',
                'scom_translations' => json_encode([
                    'en' => 'Events focused on startups and businesses creating positive social and environmental change',
                    'de' => 'Veranstaltungen mit Fokus auf Startups und Unternehmen, die positive soziale und Umweltveränderungen schaffen',
                    'es' => 'Eventos enfocados en startups y empresas que crean cambio social y ambiental positivo',
                    'pl' => 'Wydarzenia skoncentrowane na startupach i firmach tworzących pozytywną zmianę społeczną i środowiskową'
                ])
            ],
            [
                'id' => 189,
                'parent_id' => 16,
                'slug' => 'sustainable-business-events',
                'name' => 'Sustainable Business Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Sustainable Business Events',
                    'de' => 'Nachhaltige Business-Events',
                    'es' => 'Eventos de Negocios Sostenibles',
                    'pl' => 'Wydarzenia Zrównoważonego Biznesu'
                ]),
                'scom' => 'Events promoting sustainable business practices, environmental responsibility, and green innovation',
                'scom_translations' => json_encode([
                    'en' => 'Events promoting sustainable business practices, environmental responsibility, and green innovation',
                    'de' => 'Veranstaltungen zur Förderung nachhaltiger Geschäftspraktiken, Umweltverantwortung und grüner Innovation',
                    'es' => 'Eventos que promueven prácticas comerciales sostenibles, responsabilidad ambiental e innovación verde',
                    'pl' => 'Wydarzenia promujące zrównoważone praktyki biznesowe, odpowiedzialność środowiskową i zieloną innowację'
                ])
            ],
            [
                'id' => 190,
                'parent_id' => 16,
                'slug' => 'tech-for-good-events',
                'name' => 'Tech for Good Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Tech for Good Events',
                    'de' => 'Tech for Good Events',
                    'es' => 'Eventos de Tecnología para el Bien',
                    'pl' => 'Wydarzenia Technologii dla Dobra'
                ]),
                'scom' => 'Events showcasing technology solutions that address social challenges and benefit humanity',
                'scom_translations' => json_encode([
                    'en' => 'Events showcasing technology solutions that address social challenges and benefit humanity',
                    'de' => 'Veranstaltungen zur Präsentation von Technologielösungen, die gesellschaftliche Herausforderungen angehen und der Menschheit zugutekommen',
                    'es' => 'Eventos que muestran soluciones tecnológicas que abordan desafíos sociales y benefician a la humanidad',
                    'pl' => 'Wydarzenia prezentujące rozwiązania technologiczne adresujące wyzwania społeczne i przynoszące korzyści ludzkości'
                ])
            ],
            [
                'id' => 191,
                'parent_id' => 16,
                'slug' => 'veteran-entrepreneur-events',
                'name' => 'Veteran Entrepreneur Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Veteran Entrepreneur Events',
                    'de' => 'Veteranen-Unternehmer-Events',
                    'es' => 'Eventos de Emprendedores Veteranos',
                    'pl' => 'Wydarzenia Przedsiębiorców Weteranów'
                ]),
                'scom' => 'Events supporting military veterans transitioning to entrepreneurship and business ownership',
                'scom_translations' => json_encode([
                    'en' => 'Events supporting military veterans transitioning to entrepreneurship and business ownership',
                    'de' => 'Veranstaltungen zur Unterstützung von Militärveteranen beim Übergang zu Unternehmertum und Geschäftseigentum',
                    'es' => 'Eventos que apoyan a veteranos militares en transición al emprendimiento y propiedad de negocios',
                    'pl' => 'Wydarzenia wspierające weteranów wojskowych przechodzących do przedsiębiorczości i własności biznesowej'
                ])
            ],
            [
                'id' => 192,
                'parent_id' => 16,
                'slug' => 'family-business-events',
                'name' => 'Family Business Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Family Business Events',
                    'de' => 'Familien-Business-Events',
                    'es' => 'Eventos de Negocios Familiares',
                    'pl' => 'Wydarzenia Biznesu Rodzinnego'
                ]),
                'scom' => 'Events addressing the unique challenges and opportunities of family-owned businesses',
                'scom_translations' => json_encode([
                    'en' => 'Events addressing the unique challenges and opportunities of family-owned businesses',
                    'de' => 'Veranstaltungen zu den einzigartigen Herausforderungen und Chancen familiengeführter Unternehmen',
                    'es' => 'Eventos que abordan los desafíos únicos y oportunidades de empresas familiares',
                    'pl' => 'Wydarzenia dotyczące unikalnych wyzwań i możliwości firm rodzinnych'
                ])
            ],
            [
                'id' => 193,
                'parent_id' => 16,
                'slug' => 'second-time-founder-events',
                'name' => 'Second-Time Founder Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Second-Time Founder Events',
                    'de' => 'Zweitgründer-Events',
                    'es' => 'Eventos de Fundadores por Segunda Vez',
                    'pl' => 'Wydarzenia Założycieli po Raz Drugi'
                ]),
                'scom' => 'Events specifically for entrepreneurs who are starting their second, third, or subsequent ventures',
                'scom_translations' => json_encode([
                    'en' => 'Events specifically for entrepreneurs who are starting their second, third, or subsequent ventures',
                    'de' => 'Veranstaltungen speziell für Unternehmer, die ihr zweites, drittes oder nachfolgendes Unternehmen gründen',
                    'es' => 'Eventos específicamente para emprendedores que están iniciando su segundo, tercer o subsecuente emprendimiento',
                    'pl' => 'Wydarzenia specjalnie dla przedsiębiorców rozpoczynających swoje drugie, trzecie lub kolejne przedsięwzięcia'
                ])
            ],
            [
                'id' => 194,
                'parent_id' => 16,
                'slug' => 'other-special-interest',
                'name' => 'Other Special Interest Events',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Special Interest Events',
                    'de' => 'Andere Events für spezielle Interessen',
                    'es' => 'Otros Eventos de Interés Especial',
                    'pl' => 'Inne Wydarzenia Specjalne'
                ]),
                'scom' => 'Other special interest events that do not fit into the above subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Other special interest events that do not fit into the above subcategories',
                    'de' => 'Andere Events für spezielle Interessen, die nicht in die oben genannten Unterkategorien passen',
                    'es' => 'Otros eventos de interés especial que no encajan en las subcategorías anteriores',
                    'pl' => 'Inne wydarzenia specjalne, które nie pasują do powyższych podkategorii'
                ])
            ],
            [
                'id' => 195,
                'parent_id' => 17,
                'slug' => 'online-networking-events',
                'name' => 'Online Networking Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Online Networking Events',
                    'de' => 'Online-Networking-Events',
                    'es' => 'Eventos de Networking Online',
                    'pl' => 'Wydarzenia Networkingowe Online'
                ]),
                'scom' => 'Virtual networking events enabling entrepreneurs to connect and build relationships online',
                'scom_translations' => json_encode([
                    'en' => 'Virtual networking events enabling entrepreneurs to connect and build relationships online',
                    'de' => 'Virtuelle Networking-Veranstaltungen, die es Unternehmern ermöglichen, online zu vernetzen und Beziehungen aufzubauen',
                    'es' => 'Eventos virtuales de networking que permiten a los emprendedores conectar y construir relaciones online',
                    'pl' => 'Wirtualne wydarzenia networkingowe umożliwiające przedsiębiorcom nawiązywanie kontaktów i budowanie relacji online'
                ])
            ],
            [
                'id' => 196,
                'parent_id' => 17,
                'slug' => 'virtual-conferences',
                'name' => 'Virtual Conferences',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Virtual Conferences',
                    'de' => 'Virtuelle Konferenzen',
                    'es' => 'Conferencias Virtuales',
                    'pl' => 'Konferencje Wirtualne'
                ]),
                'scom' => 'Large-scale online conferences featuring keynotes, panels, and interactive sessions',
                'scom_translations' => json_encode([
                    'en' => 'Large-scale online conferences featuring keynotes, panels, and interactive sessions',
                    'de' => 'Großangelegte Online-Konferenzen mit Keynotes, Panels und interaktiven Sessions',
                    'es' => 'Conferencias online a gran escala con discursos principales, paneles y sesiones interactivas',
                    'pl' => 'Konferencje online na dużą skalę z wykładami głównymi, panelami i sesjami interaktywnymi'
                ])
            ],
            [
                'id' => 197,
                'parent_id' => 17,
                'slug' => 'webinar-series',
                'name' => 'Webinar Series',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Webinar Series',
                    'de' => 'Webinar-Serien',
                    'es' => 'Series de Webinarios',
                    'pl' => 'Serie Webinarów'
                ]),
                'scom' => 'Regular series of educational webinars covering various business and entrepreneurship topics',
                'scom_translations' => json_encode([
                    'en' => 'Regular series of educational webinars covering various business and entrepreneurship topics',
                    'de' => 'Regelmäßige Serie von Bildungswebinaren zu verschiedenen Business- und Unternehmertum-Themen',
                    'es' => 'Series regulares de webinarios educativos cubriendo varios temas de negocios y emprendimiento',
                    'pl' => 'Regularne serie webinarów edukacyjnych obejmujących różne tematy biznesowe i przedsiębiorcze'
                ])
            ],
            [
                'id' => 198,
                'parent_id' => 17,
                'slug' => 'online-workshops',
                'name' => 'Online Workshops',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Online Workshops',
                    'de' => 'Online-Workshops',
                    'es' => 'Talleres Online',
                    'pl' => 'Warsztaty Online'
                ]),
                'scom' => 'Interactive online workshops providing hands-on learning experiences in virtual environments',
                'scom_translations' => json_encode([
                    'en' => 'Interactive online workshops providing hands-on learning experiences in virtual environments',
                    'de' => 'Interaktive Online-Workshops mit praktischen Lernerfahrungen in virtuellen Umgebungen',
                    'es' => 'Talleres online interactivos que proporcionan experiencias de aprendizaje práctico en entornos virtuales',
                    'pl' => 'Interaktywne warsztaty online zapewniające praktyczne doświadczenia edukacyjne w środowiskach wirtualnych'
                ])
            ],
            [
                'id' => 199,
                'parent_id' => 17,
                'slug' => 'digital-meetups',
                'name' => 'Digital Meetups',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Digital Meetups',
                    'de' => 'Digitale Meetups',
                    'es' => 'Encuentros Digitales',
                    'pl' => 'Spotkania Cyfrowe'
                ]),
                'scom' => 'Casual online meetups for entrepreneurs to share experiences and connect digitally',
                'scom_translations' => json_encode([
                    'en' => 'Casual online meetups for entrepreneurs to share experiences and connect digitally',
                    'de' => 'Lockere Online-Meetups für Unternehmer zum Erfahrungsaustausch und digitalen Vernetzen',
                    'es' => 'Encuentros online casuales para emprendedores para compartir experiencias y conectar digitalmente',
                    'pl' => 'Nieformalne spotkania online dla przedsiębiorców w celu dzielenia się doświadczeniami i nawiązywania kontaktów cyfrowych'
                ])
            ],
            [
                'id' => 200,
                'parent_id' => 17,
                'slug' => 'remote-team-events',
                'name' => 'Remote Team Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Remote Team Events',
                    'de' => 'Remote-Team-Events',
                    'es' => 'Eventos de Equipos Remotos',
                    'pl' => 'Wydarzenia Zespołów Zdalnych'
                ]),
                'scom' => 'Events designed specifically for remote teams and distributed workforce collaboration',
                'scom_translations' => json_encode([
                    'en' => 'Events designed specifically for remote teams and distributed workforce collaboration',
                    'de' => 'Veranstaltungen speziell für Remote-Teams und die Zusammenarbeit verteilter Arbeitskräfte',
                    'es' => 'Eventos diseñados específicamente para equipos remotos y colaboración de fuerza laboral distribuida',
                    'pl' => 'Wydarzenia zaprojektowane specjalnie dla zespołów zdalnych i współpracy rozproszonej siły roboczej'
                ])
            ],
            [
                'id' => 201,
                'parent_id' => 17,
                'slug' => 'virtual-demo-days',
                'name' => 'Virtual Demo Days',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Virtual Demo Days',
                    'de' => 'Virtuelle Demo-Tage',
                    'es' => 'Días de Demo Virtuales',
                    'pl' => 'Wirtualne Dni Demo'
                ]),
                'scom' => 'Online demonstration events where startups showcase their products to virtual audiences',
                'scom_translations' => json_encode([
                    'en' => 'Online demonstration events where startups showcase their products to virtual audiences',
                    'de' => 'Online-Demonstrationsveranstaltungen, bei denen Startups ihre Produkte virtuellen Zielgruppen präsentieren',
                    'es' => 'Eventos de demostración online donde las startups muestran sus productos a audiencias virtuales',
                    'pl' => 'Wydarzenia demonstracyjne online, podczas których startupy prezentują swoje produkty wirtualnej publiczności'
                ])
            ],
            [
                'id' => 202,
                'parent_id' => 17,
                'slug' => 'online-pitch-events',
                'name' => 'Online Pitch Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Online Pitch Events',
                    'de' => 'Online-Pitch-Events',
                    'es' => 'Eventos de Pitch Online',
                    'pl' => 'Wydarzenia Pitch Online'
                ]),
                'scom' => 'Virtual pitch competitions and investor presentations conducted in online formats',
                'scom_translations' => json_encode([
                    'en' => 'Virtual pitch competitions and investor presentations conducted in online formats',
                    'de' => 'Virtuelle Pitch-Wettbewerbe und Investorenpräsentationen in Online-Formaten',
                    'es' => 'Competencias virtuales de pitch y presentaciones a inversores realizadas en formatos online',
                    'pl' => 'Wirtualne konkursy pitch i prezentacje dla inwestorów prowadzone w formatach online'
                ])
            ],
            [
                'id' => 203,
                'parent_id' => 17,
                'slug' => 'digital-learning-sessions',
                'name' => 'Digital Learning Sessions',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Digital Learning Sessions',
                    'de' => 'Digitale Lernsessions',
                    'es' => 'Sesiones de Aprendizaje Digital',
                    'pl' => 'Sesje Nauki Cyfrowej'
                ]),
                'scom' => 'Educational sessions delivered through digital platforms with interactive learning components',
                'scom_translations' => json_encode([
                    'en' => 'Educational sessions delivered through digital platforms with interactive learning components',
                    'de' => 'Bildungssessions über digitale Plattformen mit interaktiven Lernkomponenten',
                    'es' => 'Sesiones educativas entregadas a través de plataformas digitales con componentes de aprendizaje interactivo',
                    'pl' => 'Sesje edukacyjne dostarczane przez platformy cyfrowe z interaktywnymi komponentami nauki'
                ])
            ],
            [
                'id' => 204,
                'parent_id' => 17,
                'slug' => 'hybrid-conference-events',
                'name' => 'Hybrid Conference Events',
                'ord' => 0,
                'name_translations' => json_encode([
                    'en' => 'Hybrid Conference Events',
                    'de' => 'Hybride Konferenz-Events',
                    'es' => 'Eventos de Conferencias Híbridas',
                    'pl' => 'Wydarzenia Konferencji Hybrydowych'
                ]),
                'scom' => 'Conferences that combine in-person and virtual participation for maximum accessibility',
                'scom_translations' => json_encode([
                    'en' => 'Conferences that combine in-person and virtual participation for maximum accessibility',
                    'de' => 'Konferenzen, die persönliche und virtuelle Teilnahme für maximale Zugänglichkeit kombinieren',
                    'es' => 'Conferencias que combinan participación presencial y virtual para máxima accesibilidad',
                    'pl' => 'Konferencje łączące uczestnictwo osobiste i wirtualne dla maksymalnej dostępności'
                ])
            ],
            [
                'id' => 205,
                'parent_id' => 17,
                'slug' => 'other-virtual-hybrid',
                'name' => 'Other Virtual & Hybrid Events',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Virtual & Hybrid Events',
                    'de' => 'Andere virtuelle und hybride Veranstaltungen',
                    'es' => 'Otros Eventos Virtuales e Híbridos',
                    'pl' => 'Inne Wydarzenia Wirtualne i Hybrydowe'
                ]),
                'scom' => 'Other virtual and hybrid events that do not fit into the above subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Other virtual and hybrid events that do not fit into the above subcategories',
                    'de' => 'Andere virtuelle und hybride Veranstaltungen, die nicht in die oben genannten Unterkategorien passen',
                    'es' => 'Otros eventos virtuales e híbridos que no encajan en las subcategorías anteriores',
                    'pl' => 'Inne wydarzenia wirtualne i hybrydowe, które nie pasują do powyższych podkategorii'
                ])
            ],
            [
                'id' => 206,
                'parent_id' => 18,
                'slug' => 'other-events',
                'name' => 'Other Events',
                'ord' => 1,
                'name_translations' => json_encode([
                    'en' => 'Other Events',
                    'de' => 'Andere Veranstaltungen',
                    'es' => 'Otros Eventos',
                    'pl' => 'Inne Wydarzenia'
                ]),
                'scom' => 'Other virtual and hybrid events that do not fit into the above subcategories',
                'scom_translations' => json_encode([
                    'en' => 'Other virtual and hybrid events that do not fit into the above subcategories',
                    'de' => 'Andere virtuelle und hybride Veranstaltungen, die nicht in die oben genannten Unterkategorien passen',
                    'es' => 'Otros eventos virtuales e híbridos que no encajan en las subcategorías anteriores',
                    'pl' => 'Inne wydarzenia wirtualne i hybrydowe, które nie pasują do powyższych podkategorii'
                ])
            ]
        ];
        // Disable foreign key checks temporarily
        //DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Truncate the table
        DB::table('event_categories')->truncate();
        // Re-enable foreign key checks
        //DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        // Insert categories
        foreach ($categories as $category) {
            DB::table('event_categories')->insert([
                'id' => $category['id'],
                'parent_id' => $category['parent_id'],
                'slug' => $category['slug'],
                'name' => $category['name'],
                'name_translations' => $category['name_translations'],
                'scom' => $category['scom'],
                'scom_translations' => $category['scom_translations'],
                'ord' => $category['ord'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
