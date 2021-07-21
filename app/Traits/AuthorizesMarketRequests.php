<?php

namespace App\Traits;

trait AuthorizesMarketRequests
{
    // resolve the elements to send when authorizing the request
    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $accessToken = $this->resolveAccessToken();
        $headers['Authorization'] = $accessToken;
    }

    public function resolveAccessToken()
    {
        return 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI0IiwianRpIjoiZmYyOWU1ZjljNTk4MDkzNzA2MDdhMGNmZjhjNjYyNzEzMWMxMWQ0YzA5ZmYwOWUzMWUxMDE1ZjUzNzNhMDM2ZjJmNWViZjE5ZjUxZWU5YWEiLCJpYXQiOiIxNjI2ODg5MDE4LjQyOTU1MSIsIm5iZiI6IjE2MjY4ODkwMTguNDI5NTU1IiwiZXhwIjoiMTY1ODQyNTAxOC40MjU3MjgiLCJzdWIiOiIxMDQ0Iiwic2NvcGVzIjpbInB1cmNoYXNlLXByb2R1Y3QiLCJtYW5hZ2UtcHJvZHVjdHMiLCJtYW5hZ2UtYWNjb3VudCIsInJlYWQtZ2VuZXJhbCJdfQ.PHfcxML7b-PMA9-FuhcK052aeTsZHz_Dn0Aqf_Vz_NPPcG3PJtiGqgY9sHv6qs9lv9rx8HuSkj5aFQVRgyrWxb88vHF7GZCG5f8yQhr6_fAP_weNmh_jlNw2t3lQY7E4U98O7qlExNXO7ASIZBO_QDIyAZhbH2XXd_kReUeg84jwYnY2aqgR0rUEjHUcPZV0-sa7iJY7aWLFQB7DVTizATbGcuhjFfyq-bs9b4gNouW1SrfTeDJD3QSOiKUKrNNpnpuWPbKQcQQp_x-LnJNjZU87Cu2tTj5a_UHk1ASj9YnyZ5nrzBPqihIqnL2vufHurY9xVX6HdlYlyKFtZN_RpBpJCsz0XMk9IdB8JEY_jdXJDGkQORZOmT1CyGfPQCeEJE1bFJ8axX_AXFKxeZtdZq-gwEHxmmyqw-Xj-73-C_MbCdiRu3Xou-aOIS8fI7IjcsWkiH-Y6ppPoWUwi1AdhBZ8MXxJq4hEy2CUT21D0JTuVLvFrRAQkYsWBPJzGjBw5GfHpk6PfWoleLqUnMP8wYMpgvE8tzrov5EQHgWwR0KiA3g2rgXFjMmdhZCZHpG2cEnL_K_I-ldCjNQYu255pvz9ruNR9OfORXZNvWVG9TGDaII9ivcyD121Ybjp8t08t5yf14zAXqW1nE0RGgbbtzAcZ21Ws_kQstk8nCpPzNw';
    }
}
