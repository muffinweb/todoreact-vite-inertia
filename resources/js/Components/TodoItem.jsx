import React, {useState} from 'react';
import StyleSheet from 'react';


export default function TodoItem({job}){

    const[done,setDone] = useState(false);

    const doneJobStyle = {
        textDecoration: "line-through"
    }

    function checkboxChange(e){
        setDone(e.target.checked);
    }

    return (
        <tr>
            <td style={done ? doneJobStyle: {}}>{job.description} </td>
            <td>
                <input onChange={checkboxChange} className={'form-control'} type="checkbox"/>
            </td>
        </tr>
    )
}
