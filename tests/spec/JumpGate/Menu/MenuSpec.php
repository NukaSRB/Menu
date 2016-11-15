<?php

namespace spec\JumpGate\Menu;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MenuSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('JumpGate\Menu\Menu');
    }

    function it_sets_the_name()
    {
        $this->name = 'testname';

        $this->name->shouldBe('testname');
    }

    function it_sets_default_name()
    {
        $this->beConstructedWith('testdefault');

        $this->name->shouldBe('testdefault');
    }

    function it_test_get_dropdown()
    {
        $this->dropdown('slug', 'name', function ($link) {
        });

        $this->getDropDown('slug', function ($link) {
        });
    }

    function it_test_get_dropdown_exception()
    {
        $this->shouldThrow('\Exception')->during('getDropDown', ['test', function ($link) {
        }]);
    }
}
