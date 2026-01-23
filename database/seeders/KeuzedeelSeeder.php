<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Keuzedeel;

class KeuzedeelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $keuzedelen = [
            [
                'titel' => 'Web Development Advanced',
                'beschrijving' => 'Leer geavanceerde web development technieken包括 React, Vue.js en moderne frameworks.',
                'code' => 'WD-ADV-001',
                'ec' => 3,
                'niveau' => 'K3',
                'status' => 'beschikbaar',
                'max_deelnemers' => 25,
                'huidige_deelnemers' => 0,
                'startdatum' => '2024-02-01',
                'einddatum' => '2024-06-30',
                'docent' => 'J. de Vries',
                'locatie' => 'Locatie A - Ruimte 2.15',
                'voorwaarden' => 'Basiskennis HTML, CSS en JavaScript vereist.',
                'image_url' => 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=400&h=200&fit=crop',
            ],
            [
                'titel' => 'Cybersecurity Fundamentals',
                'beschrijving' => 'Ontdek de basisprincipes van cybersecurity en leer hoe je systemen kunt beveiligen.',
                'code' => 'CS-FUN-002',
                'ec' => 2,
                'niveau' => 'K2',
                'status' => 'beschikbaar',
                'max_deelnemers' => 20,
                'huidige_deelnemers' => 0,
                'startdatum' => '2024-02-15',
                'einddatum' => '2024-05-15',
                'docent' => 'M. Jansen',
                'locatie' => 'Locatie B - Lab 3.01',
                'voorwaarden' => 'Netwerkkennis aanbevolen.',
                'image_url' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=400&h=200&fit=crop',
            ],
            [
                'titel' => 'Data Science met Python',
                'beschrijving' => 'Duik in de wereld van data science met Python, pandas en machine learning basics.',
                'code' => 'DS-PYT-003',
                'ec' => 4,
                'niveau' => 'K4',
                'status' => 'beschikbaar',
                'max_deelnemers' => 15,
                'huidige_deelnemers' => 0,
                'startdatum' => '2024-03-01',
                'einddatum' => '2024-07-31',
                'docent' => 'S. Bakker',
                'locatie' => 'Locatie A - Computerlokaal 1.05',
                'voorwaarden' => 'Programmeerervaring met Python vereist.',
                'image_url' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=200&fit=crop',
            ],
            [
                'titel' => 'Mobile App Development',
                'beschrijving' => 'Leer native mobile apps ontwikkelen voor iOS en Android met React Native.',
                'code' => 'MOB-RN-004',
                'ec' => 3,
                'niveau' => 'K3',
                'status' => 'beschikbaar',
                'max_deelnemers' => 18,
                'huidige_deelnemers' => 0,
                'startdatum' => '2024-02-20',
                'einddatum' => '2024-06-20',
                'docent' => 'L. Visser',
                'locatie' => 'Locatie C - Innovatielab',
                'voorwaarden' => 'JavaScript ervaring vereist.',
                'image_url' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=400&h=200&fit=crop',
            ],
            [
                'titel' => 'Cloud Computing Essentials',
                'beschrijving' => 'Maak kennis met cloud computing, AWS, Azure en het deployen van applicaties.',
                'code' => 'CLD-ESS-005',
                'ec' => 2,
                'niveau' => 'K2',
                'status' => 'vol',
                'max_deelnemers' => 30,
                'huidige_deelnemers' => 30,
                'startdatum' => '2024-01-15',
                'einddatum' => '2024-04-15',
                'docent' => 'R. Mulder',
                'locatie' => 'Locatie B - Ruimte 2.20',
                'voorwaarden' => 'Geen specifieke voorwaarden.',
                'image_url' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=400&h=200&fit=crop',
            ],
        ];

        foreach ($keuzedelen as $keuzedeel) {
            Keuzedeel::create($keuzedeel);
        }
    }
}
