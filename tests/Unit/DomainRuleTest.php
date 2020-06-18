<?php

namespace Tests\Unit;

use App\Rules\ValidDomain;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DomainRuleTest extends TestCase
{

    /**
     * Check that a valid domain passes
     *
     * @dataProvider validDomains
     * @param string $domain
     * @return void
     * @test
     */
    public function a_valid_domain_passes($domain)
    {
        $rule = new ValidDomain;
        $this->assertTrue($rule->passes('attribute', $domain));
    }

    /**
     * Check that a invalid domain fails
     *
     * @dataProvider invalidDomains
     * @param string $domain
     * @return void
     * @test
     */
    public function an_invalid_domain_fails($domain)
    {
        $rule = new ValidDomain;
        $this->assertFalse($rule->passes('test', $domain));
    }

    public function validDomains()
    {
        return [
            ['google.com'],
            ['www.google.com'],
        ];
    }

    public function invalidDomains()
    {
        return [
          ['https://google.com'],
          ['http://google.com'],
          ['http://www.google.com'],
          ['https://'],
          ['http://'],
        ];
    }
}
