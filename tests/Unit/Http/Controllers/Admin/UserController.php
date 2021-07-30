<?php

namespace Tests\Unit\Http\Controllers\Admin;

use App\Http\Controllers\Admin\User\UserController;
use App\Http\Requests\UserRequest;
use App\Repositories\UserRepository;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Mockery;
use Mockery\Mock;
use Symfony\Component\HttpFoundation\ParameterBag;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    protected $userMock;
    protected $user;
    /**
     * Chạy trước mỗi method test. Sử dụng khi muốn khởi tạo biến, mở kết nối file,... chuẩn bị môi trường để test
     */

    public function setUp(): void
    {
        $this->userMock = Mockery::mock(UserRepository::class);

        $this->user = Mockery::mock(User::class);

        parent::setUp();
    }


    /**
     *  Chạy sau mỗi method test. Sử dụng để hủy các biến, kết nối,...
     */
    public function tearDown(): void
    {
        Mockery::close();

        parent::tearDown();
    }

    public function testFuncitonIndexWithDataUsers()
    {

        $controller = new UserController($this->userMock);

        $result = $controller->index();

        $this->assertInstanceOf(LengthAwarePaginator::class, $result);
    }

    public function testCanStoreUser()
    {
        $data = [
            'name' => 'thao',
            'email' => 'thao12123@com.co',
            'password' => '123456',
            'address' => 'Quang Nam',
            'type' => '1',
        ];

        $request = new UserRequest();
        $request->headers->set('content-type', 'application/json');
        $request->setJson(new ParameterBag($data));

        $controller = new UserController($this->userMock);

        $result = $controller->store($request);

        $this->assertInstanceOf(User::class, $result);
    }
}
