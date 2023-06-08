<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = array(
            array(
                'event_name' => 'Event 1',
                'address' => '123 Main Street',
                'city' => 'Exampleville',
                'zip_code' => '12345',
                'latitude' => '40.123456',
                'longitude' => '-70.654321',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'price' => '$10',
                'date' => '2023-06-08',
                'start_time' => '10:00 AM',
                'end_time' => '12:00 PM',
                'phone' => '+1 123-456-7890',
                'email' => 'event1@example.com',
                'website' => 'www.event1.com'
            ),
            array(
                'event_name' => 'Event 2',
                'address' => '456 Elm Street',
                'city' => 'Sampletown',
                'zip_code' => '67890',
                'latitude' => '41.987654',
                'longitude' => '-71.123456',
                'description' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => '$15',
                'date' => '2023-06-09',
                'start_time' => '2:00 PM',
                'end_time' => '5:00 PM',
                'phone' => '+1 234-567-8901',
                'email' => 'event2@example.com',
                'website' => 'www.event2.com'
            ),
            array(
                'event_name' => 'Event 3',
                'address' => '789 Oak Avenue',
                'city' => 'Testville',
                'zip_code' => '54321',
                'latitude' => '42.135790',
                'longitude' => '-72.987654',
                'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'price' => '$20',
                'date' => '2023-06-10',
                'start_time' => '6:00 PM',
                'end_time' => '8:00 PM',
                'phone' => '+1 345-678-9012',
                'email' => 'event3@example.com',
                'website' => 'www.event3.com'
            ),
            array(
                'event_name' => 'Event 4',
                'address' => '987 Pine Street',
                'city' => 'Experiment City',
                'zip_code' => '01234',
                'latitude' => '39.876543',
                'longitude' => '-73.246810',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'price' => '$25',
                'date' => '2023-06-11',
                'start_time' => '9:00 AM',
                'end_time' => '11:00 AM',
                'phone' => '+1 456-789-0123',
                'email' => 'event4@example.com',
                'website' => 'www.event4.com'
            ),
            array(
                'event_name' => 'Event 5',
                'address' => '654 Maple Avenue',
                'city' => 'Trialville',
                'zip_code' => '98765',
                'latitude' => '38.765432',
                'longitude' => '-74.567890',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'price' => '$30',
                'date' => '2023-06-12',
                'start_time' => '3:00 PM',
                'end_time' => '6:00 PM',
                'phone' => '+1 567-890-1234',
                'email' => 'event5@example.com',
                'website' => 'www.event5.com'
            ),
            array(
                'event_name' => 'Event 6',
                'address' => '321 Walnut Street',
                'city' => 'Exampletown',
                'zip_code' => '56789',
                'latitude' => '37.654321',
                'longitude' => '-75.678901',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => '$35',
                'date' => '2023-06-13',
                'start_time' => '1:00 PM',
                'end_time' => '4:00 PM',
                'phone' => '+1 678-901-2345',
                'email' => 'event6@example.com',
                'website' => 'www.event6.com'
            ),
            array(
                'event_name' => 'Event 7',
                'address' => '111 Cedar Avenue',
                'city' => 'Sample City',
                'zip_code' => '89012',
                'latitude' => '36.543210',
                'longitude' => '-76.789012',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'price' => '$40',
                'date' => '2023-06-14',
                'start_time' => '7:00 PM',
                'end_time' => '9:00 PM',
                'phone' => '+1 789-012-3456',
                'email' => 'event7@example.com',
                'website' => 'www.event7.com'
            ),
            array(
                'event_name' => 'Event 8',
                'address' => '222 Elm Street',
                'city' => 'Testville',
                'zip_code' => '54321',
                'latitude' => '42.135790',
                'longitude' => '-72.987654',
                'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'price' => '$45',
                'date' => '2023-06-15',
                'start_time' => '10:00 AM',
                'end_time' => '12:00 PM',
                'phone' => '+1 890-123-4567',
                'email' => 'event8@example.com',
                'website' => 'www.event8.com'
            ),
            array(
                'event_name' => 'Event 9',
                'address' => '987 Pine Street',
                'city' => 'Experiment City',
                'zip_code' => '01234',
                'latitude' => '39.876543',
                'longitude' => '-73.246810',
                'description' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => '$50',
                'date' => '2023-06-16',
                'start_time' => '3:00 PM',
                'end_time' => '6:00 PM',
                'phone' => '+1 234-567-8901',
                'email' => 'event9@example.com',
                'website' => 'www.event9.com'
            ),
            array(
                'event_name' => 'Event 10',
                'address' => '654 Maple Avenue',
                'city' => 'Trialville',
                'zip_code' => '98765',
                'latitude' => '38.765432',
                'longitude' => '-74.567890',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'price' => '$55',
                'date' => '2023-06-17',
                'start_time' => '1:00 PM',
                'end_time' => '4:00 PM',
                'phone' => '+1 567-890-1234',
                'email' => 'event10@example.com',
                'website' => 'www.event10.com'
            ),
            array(
                'event_name' => 'Event 11',
                'address' => '321 Walnut Street',
                'city' => 'Exampletown',
                'zip_code' => '56789',
                'latitude' => '37.654321',
                'longitude' => '-75.678901',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price' => '$60',
                'date' => '2023-06-18',
                'start_time' => '7:00 PM',
                'end_time' => '9:00 PM',
                'phone' => '+1 890-123-4567',
                'email' => 'event11@example.com',
                'website' => 'www.event11.com'
            ),
            array(
                'event_name' => 'Event 12',
                'address' => '111 Cedar Avenue',
                'city' => 'Sample City',
                'zip_code' => '89012',
                'latitude' => '36.543210',
                'longitude' => '-76.789012',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'price' => '$65',
                'date' => '2023-06-19',
                'start_time' => '10:00 AM',
                'end_time' => '12:00 PM',
                'phone' => '+1 234-567-8901',
                'email' => 'event12@example.com',
                'website' => 'www.event12.com'
            ),
        );

        foreach ($events as $event) {

            //genarate random number between 1 and 10 and add as the catogory_id to the hotel array
            $event['category_id'] = rand(1, 10);
            \App\Models\Event::create($event);
        }

    }
}
