<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Response;
use Tests\TestCase;

class BukuControllerTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    
    /**
     * @test
     */

    // public function it_get_data() {
    
    //     $this->json('GET', 'api/buku')
    //         //  ->assertStatus(201)
    //          ->assertJsonStructure(
    //              [
    //                  'buku' => [
    //                      '*' => [
                             
    //                          'nama_buku',
                             
    //                          ]
    //                      ]
    //             ]
                 
    //          );
        
    // }

    // /**
    //  * @test
    //  */

    // public function it_stores_data()
    // {
        
    //     $user = User::factory()->create();
    //     // $this->actingAs($user, 'api');

    //     $buku = [
    //         "nama_buku" => "the killer",

    //     ];

    //     $this->json('POST', 'api/buku', $buku, ['Accept' => 'application/json'])
    //         ->assertStatus(201)
    //         ->assertJson([
    //             "buku" => [
    //                 "nama_buku" => "the killer",

    //             ],
    //             "message" => "Created successfully"
    //         ]);
    // }


    // /**
    //  * @test
    //  */
    
    // public function it_update_data()
    // {
        
    //     $user = User::factory()->create();
    //     // $this->actingAs($user, 'api');

    //     $buku = [
    //         "nama_buku" => "the serial killer",

    //     ];

    //     $this->json('PUT', 'api/buku/2', $buku, ['Accept' => 'application/json'])
    //         ->assertStatus(201)
    //         ->assertJson([
    //             "buku" => [
    //                 "nama_buku" => "the serial killer",

    //             ],
    //             "message" => "Created successfully"
    //         ]);
    // }

    /**
     * @test
     */

    public function it_delete_data()
    {
        
        $user = User::factory()->create();
        // $this->actingAs($user, 'api');

        $this->json('DELETE', 'api/buku/3' , ['Accept' => 'application/json'])
            ->assertStatus(204);
    }
    
}
