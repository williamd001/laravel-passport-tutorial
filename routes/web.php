<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



/*
 * steps
 *
 * add authentication system
 * composer require laravel/passport
 * php artisan migrate
 * php artisan passport:install
 * php artisan passport:client --client
 * Client ID: 3
    Client secret: WDSzVq7x4vjVfl7dk5QG0uX66vrWfYE0q9SmzRf6

add to route middleware group

call the Passport::routes method within the boot method of your AuthServiceProvider

change config/auth.php api diver to passport

make request to oauth/token and retrieve bearer token

    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiYjNkZGE0OTQ5Y2Y0Y2VlMGJkYmVjMjFjOTdkYjc5M2RlNWU4ZjZlNmI4NjdjMGY0NjVkMzM4OTVmMThlMmFhNTcxNDk0MzczMWE5NTA3MjEiLCJpYXQiOjE1OTU4NTg2NTgsIm5iZiI6MTU5NTg1ODY1OCwiZXhwIjoxNjI3Mzk0NjU4LCJzdWIiOiIiLCJzY29wZXMiOltdfQ.EpwVjsgeSbcimHsWP4P0lB3z8jMxTBxBUUJDUOL0SupbxG_R8D0de3pjWhichxkImKREfHScU4VaiN7Qo2hnqzTmmOYuVVeKZS32qzqA77QVlEkGtqa6MCo95PhHSoLCTaP1DmLMFBZ92cJRnjUdrIUtr6Ibe1u18OvddSIkcTZraTtelDGp5WOBSXwJy7dgzdjKkUhyCm83ZMMLHkqwFs5EtfJ71G5JybinINU0tdaGkez3uG5i4blx2v-vmaqirblF0kY-gymB8PfTacyNuGf4AdsbHRFqPHBw3HgZQ8xt3HeI6YQR-T4LZ_cSWFO1giPNSXy1sA60idm55la2JyIbT259ec-kgs5Mpju0a6EkRJ84Rr-tDzOsLvQNQSXIeoslYGNYtmjQqwwGBPs2STRys-0J0hTphbQrhVC12JAGUFzrDYTLC3IkAld473-g4VJ7GWm_zifeUPVL7EJ75kHv8i4bpXiKRp1pvp_7LSNw1zZXSSgXKC-rzeBDQVZhmqsJKCqjl4hsuJfjuGHLzbxblnhMBkbo4SOpGNjJ_PR93BmpZOCIdf9g3zJp0y3gjcIJaqg3kKVTkrSBtfPegSYojCF4MgUZNfEauJ8hvuezE73QrUWn8SJhAqLs5ezfq7nGQWp758Jn9uFplwLz7_eQ_06AE27PUOGuoMxZvcM"

add 'Authorization' header to api request with value 'Bearer ' + the access token

done

    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiNjhkNDZlYzQzNGI4MWFlYTRjYTRmNDRjNTZmNjk2MTI0YzA5YjZjYmUwMDJmZGQwZjgyYmQwYmRkZWVkZmM1ZmJiNzU1NzA0MzllNzFkOWYiLCJpYXQiOjE1OTU4NjAxNjEsIm5iZiI6MTU5NTg2MDE2MSwiZXhwIjoxNTk1ODYwMzQxLCJzdWIiOiIiLCJzY29wZXMiOltdfQ.JjQ6Wx6C8d1icRVW3L21ZVa1Vgh8BszbcvBxYlyNMXjYM6TxzZXw2HLBLV5b1HojatFBlx1bg3U33b6TAtZBFRG3qVAwNjRhkTvFCbJk2ng2pso2tDzQqxFkgh5pEgPekfVaOfZDSbeG4ijpjK3DOW57QWM7FIr0yAqhyqz_s82Qt48tlkGlH73BOf4-Gt3kLB-yffxO0jiodnH5yD_n7SzLj3BxwP1Uq3Vr9UYvE4pLRmV_r4vSQux6lx4-dqVMZevst5ptbdF5cTbQI5PVuE8HRQqcLxku_E4zDEBxo4KQwCnm0NNtTzTtLtMIWApdiolNnHHXvHW_7Y4XIS3dpw1SkULORp71dlYYKNTZgIFcTDGKdFuk_fXwSzZxouWPxqzB1lTkdcXbLafMtt2DbFD8CByzlbmtidx2qvZ1TAgP6JgksB1v-X4xFyT1cLPfLC5N0efbM47RCp9MgpwEiFXbnem7IxUUImDhyFWW6g_0kNe2EuZ-6eq09WI_XyzL5x9LSjP1pCEISBKWSr0oDVDE0l8ih9GEl3_RpNjc0sE1N3NGG9y8qR7QXjWFlD_ZljYL9JvZE3WQ79fR4fAOyXvrVpsDuKeQ9J28nGPCfdQDBFGntFf3zS_IQm5tDR9cvN_VR3oiLljzjPIGyVPSIq_pPkFgXOJIoTgs5ZK6T5w"

 */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

