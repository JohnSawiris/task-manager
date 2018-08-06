import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route, Switch } from 'react-router-dom';

// Components
import Header from './Header';
import ProjectsList from './ProjectsList';
import NewProject from './NewProject';
import SingleProject from './SingleProject';

export default class App extends Component {
    render() {
        return (
            <BrowserRouter>
                <div>
                    <Header />
                    <Switch>
                        <Route exact path="/" component={ProjectsList} />
                        <Route path="/create" component={NewProject} />
                        <Route path="/:id" component={SingleProject} />
                    </Switch>
                </div>
            </BrowserRouter>
        );
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
