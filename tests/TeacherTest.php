<?php

//use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TeacherTest extends TestCase
{
    /** @test */
    public function show_create_teacher_form()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->visit('admin/teachers')
            ->see('Teachers')
            ->click('Add')
            ->see('Add')
            ->press('Submit')
            ->see('Something went wrong.');
    }

    /** @test */
    public function create_teacher()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->visit('admin/teachers')
            ->see('Delete')
            ->click('Add')
            ->seePageIs('admin/teachers/create')
            ->see('Add');
    }
}
