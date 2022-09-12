import React, {useState,useEffect} from "react";
import { Head } from "@inertiajs/inertia-react";
import TodoItem from "@/Components/TodoItem";

function TodoList(props){
    return(
        <>
            <Head title={props.title} />
            <table style={{width: '50%',margin:'auto'}} className={'table table-bordered table-striped'}>
                <tbody>
                {
                    props.jobs.map((job, key) => {
                        return (<TodoItem key={key} job={job}  />)
                    })
                }
                </tbody>
            </table>
        </>
    )
}

export default TodoList;
