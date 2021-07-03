import { h, render } from 'preact';
import { Link, Router } from 'preact-router';

import Home from "./pages/home";
import Conference from "./pages/conference";

function App() {
    return (
        <div>
            <header>
                <Link href="/">Home</Link>
                <br/>
                <Link href="/conference/amsterdam2019">Amsterdam2019</Link>
            </header>

            <Router>
                <Home path="/"></Home>
                <Conference path="/conference/:slug"></Conference>
            </Router>
        </div>
    )
}

render(<App />, document.getElementById('app'));