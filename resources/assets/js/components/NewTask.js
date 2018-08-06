import React from 'react';

const NewTask = (props) => (
    <li
        className='list-group-item d-flex justify-content-between align-items-center'>
        
        {props.title}

        <button 
            onClick={props.markTaskAsCompleted}
            className='btn btn-primary btn-sm'>
            Mark as completed
        </button>
    </li>
)

export default NewTask;
