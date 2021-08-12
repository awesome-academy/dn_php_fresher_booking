<?php

namespace Tests\Unit\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Tour\TourController;
use App\Http\Requests\TourRequest;
use App\Models\Tour;
use App\Repositories\TourRepository;
use Illuminate\Database\Eloquent\Collection;
use Mockery;
use Symfony\Component\HttpFoundation\ParameterBag;
use Tests\TestCase;

class TourControllerTest extends TestCase
{
    protected $userMock;
    protected $user;
    /**
     * Chạy trước mỗi method test. Sử dụng khi muốn khởi tạo biến, mở kết nối file,... chuẩn bị môi trường để test
     */
    public function setUp(): void
    {
        $this->tourMock = Mockery::mock(TourRepository::class);

        $this->tour = Mockery::mock(Tour::class);

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
        $controller = new TourController($this->tourMock);

        $result = $controller->index();

        $data = $result->getData();


        $this->assertArrayHasKey('tours', $data);

        $this->assertArrayHasKey('active', $data);
    }

    public function testFunctionUpdateTour()
    {
        $data = [
            'name' => 'Da Lat Trip',
            'category_id' => '1',
            'money' => '5000',
            'id' => '1',
            'description' => 'chinh sua',
        ];

        $request = new TourRequest();
        $request->headers->set('content-type', 'application/json');
        $request->setJson(new ParameterBag($data));

        $controller = new TourController($this->tourMock);

        $result = $controller->update($request);

        $this->assertInstanceOf(Tour::class, $result);

        //create_new_file
    }
}
