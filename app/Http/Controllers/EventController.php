<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use App\Repositories\EventRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EventController extends AppBaseController
{
    /** @var  EventRepository */
    private $eventRepository;

    public function __construct(EventRepository $eventRepo)
    {
        $this->eventRepository = $eventRepo;
    }

    /**
     * Display a listing of the Event.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
//        $this->eventRepository->pushCriteria(new RequestCriteria($request));
//        $events = $this->eventRepository->paginate(15);
        $events = $this->eventRepository->all();
//        dd($events);
        return view('events.index')
            ->with('events', $events);
    }

    /**
     * Show the form for creating a new Event.
     *
     * @return Response
     */
//    public function create()
//    {
//        $events = $this->eventRepository->all();
//        return view('events.index')->with('events',$events);
//    }

    /**
     * Store a newly created Event in storage.
     *
     * @param CreateEventRequest $request
     *
     * @return Response
     */
    public function store(CreateEventRequest $request)
    {

        $input = $request->all();

//        $id = \DB::connection('mysql')->table('INFORMATION_SCHEMA.TABLES')->select('AUTO_INCREMENT')->where('TABLE_SCHEMA','bcorp')->where('TABLE_NAME','events')->pluck('AUTO_INCREMENT');
        $id = getAutoIncID('events');

        $input['url'] = url('events/'.$id[0].'/edit');

        if(isset($request->start) || isset($request->end))
        {
            $input[ 'start' ] = date( 'Y-m-d H:i:s' , strtotime( $input[ 'start' ] ));
            $input[ 'end' ] = date( 'Y-m-d H:i:s' , strtotime( $input[ 'end' ]));
        }

//        dd($input);

        $event = $this->eventRepository->create($input);

        Flash::success('Event saved successfully.');

        return redirect(route('events.index'));
    }

    /**
     * Display the specified Event.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $event = $this->eventRepository->findWithoutFail($id);

        if (empty($event)) {
            Flash::error('Event not found');

            return redirect(route('events.index'));
        }

        return view('events.show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified Event.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
//        $event = $this->eventRepository->findWithoutFail($id);
        $event = Event::findOrFail($id);
//        $test = \DB::table('events')->find($id);

        if (empty($event)) {
            Flash::error('Event not found');

            return redirect(route('events.index'));
        }

//        $end = date("m/d/Y h:i a", strtotime( $test->end));

        return view('events.edit')->with('event' , $event);
    }

    /**
     * Update the specified Event in storage.
     *
     * @param  int              $id
     * @param UpdateEventRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEventRequest $request)
    {

        $event = $this->eventRepository->findWithoutFail($id);

        if(isset($request->start) || isset($request->end))
        {
            $request[ 'start' ] = date( 'Y-m-d H:i:s' , strtotime( $request[ 'start' ] ));
            $request[ 'end' ] = date( 'Y-m-d H:i:s' , strtotime( $request[ 'end' ]));
        }

        if (empty($event)) {
            Flash::error('Event not found');

            return redirect(route('events.index'));
        }

        $event = $this->eventRepository->update($request->all(), $id);

        Flash::success('Event updated successfully.');

        return redirect(route('events.index'));
    }

    /**
     * Remove the specified Event from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $event = $this->eventRepository->findWithoutFail($id);

        if (empty($event)) {
            Flash::error('Event not found');

            return redirect(route('events.index'));
        }

        $this->eventRepository->delete($id);

        Flash::success('Event deleted successfully.');

        return redirect(route('events.index'));
    }
}
