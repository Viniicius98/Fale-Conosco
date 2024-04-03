import React, { useState } from "react";
import { createRoot } from "react-dom/client";
import {
    FormContainer,
    Forms,
    FormsContent,
    FormsLabel,
    FormsInput,
    FormsButton,
} from ".";
import axios from "axios";

const FormComponent = () => {
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const [message, setMessage] = useState("");
    const [error, setError] = useState(null);

    const handleSubmit = async (e) => {
        e.preventDefault();
        try {
            const response = await axios.post(
                "http://localhost:8000/api/faleconosco",
                {
                    email,
                    password,
                }
            );
            console.log("Response:", response.data);
            setMessage(response.data);
            // Limpar os campos do formulário após o envio bem-sucedido
            setEmail("");
            setPassword("");
        } catch (error) {
            setError(error.response.data.message);
        }
    };

    return (
        <FormContainer>
            <Forms onSubmit={handleSubmit}>
                <FormsContent>
                    <FormsLabel htmlFor="email">Email:</FormsLabel>
                    <FormsInput
                        type="email"
                        id="email"
                        value={email}
                        onChange={(e) => setEmail(e.target.value)}
                    />
                </FormsContent>
                <FormsContent>
                    <FormsLabel htmlFor="password">Senha:</FormsLabel>
                    <FormsInput
                        type="password"
                        id="password"
                        value={password}
                        onChange={(e) => setPassword(e.target.value)}
                    />
                </FormsContent>
                {error && <div>{error}</div>}
                {message && <div>{message}</div>}
                <FormsButton type="submit">Enviar</FormsButton>
            </Forms>
        </FormContainer>
    );
};

export default FormComponent;

const rootElement = document.getElementById("form");

if (rootElement) {
    // Verifique se o elemento raiz existe
    const Index = createRoot(rootElement);
    Index.render(<FormComponent />);
}
