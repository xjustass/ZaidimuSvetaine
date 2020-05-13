<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdateJoke extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:updatejoke';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //Get joke from API

        $job_result = $this->call_api("GET","https://api.jokes.one/jod?category=jod",false,null);

        //print_r($job_result);
        $obj = json_decode($job_result);

        if (isset($obj->contents->jokes[0]->joke->text)) {
            $joke_text = $obj->contents->jokes[0]->joke->text;



            $joke = DB::table('jokes')->get();

            if ($joke->isEmpty()) {

                DB::table('jokes')->insert(
                    ['joke' => $joke_text]
                );
            }
            else{

                DB::table('jokes')
                ->where('id', 1)
                ->update(['joke' => $joke_text]);
            }
        }



    }

    private function call_api($method, $url, $data = false,$api_key=null)
    {
        $curl = curl_init();

        switch ($method)
        {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
        }

        $headers = [
        'Content-Type: application/json'
        ];
        if ( !empty($api_key))
        $headers[] = 'X-JokesOne-Api-Secret: '. $api_key;

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }



}
